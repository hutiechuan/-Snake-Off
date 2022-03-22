<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		
		}
		
		#container{
			border: solid 1px black;
			border-bottom: none;
			border-right: none;
			position: relative;
			margin-left: 250px;
			margin-top: 50px;
		}
		
		ul{
			list-style: none;
		}
		
		ul li{
			border: solid 1px black;
			border-top: none;
			border-left: none;
			float: left;
		}
		
		#container > div{
			float: right;
		}
		
		#person > div{
			background-color: red;
			position: absolute;
			left: 0px;
			top: 0px;
		}
		
		.food{
			position: absolute;
			left: 0px;
			top: 0px;
			background: #0000FF;
		}
	</style>
	</head>
	<?php
					if(!isset($_COOKIE["username"])){
						header("Location:login.php");
						exit();
					}
					
				 
				 
				 ?>
	
	<body>
		
		<div id="title" style="height: 70px;line-height: 70px;text-align: center;">
			
			<?php
				
			include('config.php');
			$data = file_get_contents($path.'/data/highest.txt');
			$data = explode(',', $data);
			echo "<h1>Record Holder</h1>";
			echo "<h3>$data[1] : $data[0]</h3>";
			
			
			?>
			
			
		</div>
		<br />
		<div id="container" >
			<ul id="uls">
				
			</ul>
			
			<button type="button" id="btn">start</button>
			
			<div id="box">
				score:0
			</div>
			
			<div id="person">
				
			</div>
			
		</div>
		<br />
		<a href="firstpage.php">Go Back</a>
		
		
	</body>
	
	<script type="text/javascript">

		var container = $id('container');
		var uls = $id('uls');
		var datas = {size:20, x:20, y:20};
		var btn = $id('btn');
		var person = $id('person');
		var perdate = {speed:200, code:39}
		var timer = null;
		var persondiv = $tagname(person,'div');
		var lis = $tagname(uls,'li');
		var food = null;
		var box = $id('box');
		var index = 0;
		var firsttime=true;
		
		function isself(){
			for(var i =1; i<persondiv.length;i++){
				if(pz(persondiv[0],persondiv[i]) == true){
					return false;
				}
			}
			return true;
		}
		
		
		function isout(){
			if(persondiv[0].offsetLeft>=0 && persondiv[0].offsetLeft<((datas.size+1)*datas.x)
			 && persondiv[0].offsetTop>=0&& persondiv[0].offsetTop<((datas.size+1)*datas.y)){
				 return true;
			 }
			 else{
			 return false;
			 }
		}
		
		
		function start(){
			btn.onclick = function(){
				index=0;
				box.innerHTML = 'score: '+0;
				createperson();
				moveperson();
				bindperson();
				creatfood();
			}
		}
		
		function Num(){
			index++;
			box.innerHTML = 'score: '+index;
			var myAudio = document.createElement("audio");
			myAudio.src = "data/correct.wav";
			myAudio.play();
		}
		
		function pz(el1,el2){
			var l1 = el1.offsetLeft;
			var r1 = el1.offsetLeft+el1.offsetWidth;
			var t1 = el1.offsetTop;
			var b1 = el1.offsetTop+el1.offsetHeight;
			
			var l2 = el2.offsetLeft;
			var r2 = el2.offsetLeft+el2.offsetWidth;
			var t2 = el2.offsetTop;
			var b2 = el2.offsetTop+el2.offsetHeight;
			
			if(r1<=l2||b1<=t2||l1>=r2 || t1>=b2){
				return false;
				}
			else{
				return true;
			}
			
		}
		
		function ifFilert(li){
			for(var i=0; i<persondiv.length; i++){
				if(li.index == persondiv[i].index){
					return false;
				}
				
			}
			return true;
			
		}
		
		function creatfood(){
			var hrr = [];
			for(var i =0; i<lis.length ;i++){
				if(ifFilert(lis[i])){
					hrr.push(lis[i]);
				}
				}
			var random = Math.floor(Math.random()*(hrr.length-1));
			food = document.createElement('div');
			container.appendChild(food);
			food.className = 'food';
			food.id='target';
			food.style.width = food.style.height =datas.size+'px';
			food.style.left = hrr[random].offsetLeft+'px'; 
			food.style.top = hrr[random].offsetTop+'px'; 
		}
		
		function moveperson(){
			
			timer=setInterval(function(){
				
			if(!isout() || !isself()){
				alert('GAME OVER!');
				clearInterval(timer);
				console.log("about ajax");
				person.innerHTML=''
				$.ajax({
							url: 'process.php',
						type: 'POST',
					  data: {
						score:index,
					  },
					  success: function(data, status) {
					   
				},
				error: function(req,data,status){
					console.log(data);
				}
				})
				document.getElementById('target').remove();	
					return;
			}
			
				if(pz(persondiv[0],food)){
					food.removeAttribute('class');
					person.appendChild((food));
					creatfood();
					Num();					
				}
			
			
			
			
			
			
			for(var i = persondiv.length-1; i>0 ; i--){
				persondiv[i].style.left = persondiv[i-1].offsetLeft+'px';
				persondiv[i].style.top = persondiv[i-1].offsetTop+'px';
				persondiv[i].index = persondiv[i-1].index;
			}
				
				switch(perdate.code){
					case 37:
						persondiv[0].style.left = persondiv[0].offsetLeft-(datas.size+1)+'px';
						persondiv[0].index--;
					break;
					case 38:
						persondiv[0].style.top = persondiv[0].offsetTop-(datas.size+1)+'px';
						persondiv[0].index -= datas.x;
					break;
					case 39:
						persondiv[0].style.left = persondiv[0].offsetLeft+(datas.size+1)+'px';
						persondiv[0].index++;
					break;
					case 40:
						persondiv[0].style.top = persondiv[0].offsetTop+(datas.size+1)+'px';
						persondiv[0].index += datas.x;
					break;
					
				}
				
			},perdate.speed)
		}
		
		
		function bindperson(){
			
			document.onkeydown = function(e){
				
				var e = window.event || e;
				switch(e.keyCode){
					case 37:
					perdate.code = 37;
					
					break;
					
					case 38:
					perdate.code = 38;
					
					break;
					
					case 39:
					perdate.code = 39;
					
					break;
					
					case 40:
					perdate.code = 40;
					
					break;
				}
			
				
			}
		}
		
		function createperson(){
			var operson = document.createElement('div');
			operson.style.width = operson.style.height = datas.size+'px';
			person.appendChild(operson);
			operson.index = 0;
		}
		
		function init(){
			createmap();
		}
		
		function $tagname(parent,child){
			return parent.getElementsByTagName(child);
		}
		
		function createmap(){
			container.style.height = container.style.width = (datas.size+1)*datas.x+1+'px';
			
			for(var i=0; i<datas.x*datas.y;i++){
				var lst = document.createElement('li');
				lst.style.height = lst.style.width = datas.size+'px';
				lst.index = i;
				uls.appendChild(lst);
				
			}
		}
		
		
		function $id(id){
			return document.getElementById(id);
		}
		
		
		
		init();
		start();
		

		
	</script>
</html>