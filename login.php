<!doctype html>
<html>
  <head>
    <title>Chatroom</title>
    <style>
      #chat_history {
        display: block;
        width: 500px;
        height: 200px;
      }
      #chat_panel {
      }
      .hidden {
        display: none;
      }

    </style>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	

  </head>
 
  
  
  
  
 <body background="img/bg1.jpg" style=" background-repeat: no-repeat;background-size: 1440px 1000px;background-color: rgba(255,255,255,0.6);">

    <div class="alert alert-primary" role="alert">
      Retro  <a href="#" class="alert-link">Snake</a>.
    </div>
	<br/>
	<br><br/>
	
	
		<img src="img/snake.png"  class="center" style="margin-left: auto;
  margin-right: auto; display: block;width: 300px;">

	
    <div id="start_panel" style="border: solid 2px skyblue;width: 300px; height: 200px;margin: auto;border-radius: 10px;" >
		<br>
		<form action="index.php" method="post">
      &nbsp;<span style="font-size: 100%;color: white;">Username:</span>
      <input type="text" name="username">
	  
	  <br/>
	  <br>
	   &nbsp;<span style="font-size: 100%;color: white;">Password:</span>
	   &nbsp;<input type="password" name="password">
	   
	   
	   <br>  
	     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="login" />  
	    &nbsp;&nbsp;&nbsp;<button type="button" ><a href="signup.html" style="text-decoration: none;color: black;">Signup</a></button>
		&nbsp;&nbsp;&nbsp;&nbsp;
		</form>
		</div>
		
		<?php
		if(isset($_COOKIE["username"])){
			header("Location:firstpage.php");
			exit();
		}

			if ($_GET['error']=='usernameempty'){
				print '<script>alert("empty username")</script>'; 
			}
			else if($_GET['error']=='passwordempty'){
				print '<script>alert("empty password")</script>'; 
			}
			else if($_GET['error']=='wrongp'){
				print '<script>alert("wrong password")</script>'; 
			}
			else if($_GET['error']=='wrong'){
				print '<script>alert("wrong username")</script>'; 
			}
			

			
								
							 
							 
			
		
		?>
		
	
		
    <!-- bring in the jQuery library -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
<!-- 	<script src="jquery-3.3.1.min.js"></script> -->
	
	
    <!-- custom application code -->
    

  </body>
</html>
