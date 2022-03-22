<DOCTYPE html>
	<html>
		<head>
			<title>Welcome to my cause Site</title>


			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
			 crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="css/custom.css">
			
			<style>
				
			</style>
 <?php
				if(!isset($_COOKIE["username"])){
					header("Location:login.php");
					exit();
				}
				
			 
			 
			 ?>
		</head>
		<body>
			<div class="container-fluid" >
				<div class="row">
					<div class="col-md-12 header" style="min-height: 100vh;">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="max-height: 400px;">
							<div class="carousel-inner" style="min-height: 100vh;">
								<div class="carousel-item active">
									<img src="img/1.png" height="650" class="d-block w-100"  alt="...">
								</div>
								<div class="carousel-item">
									<img src="img/2.jpg" height="650"     class="d-block w-100"  alt="...">
								</div>
								<div class="carousel-item">
									<img src="img/4.png"  height="650"  class="d-block w-100"  alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

					</div>

				</div>
				<div class="row">
					<!-- <div class="col-md-12">

						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
							 aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
								<a class="navbar-brand" href="#">Home</a>
								<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
									<li class="nav-item active">
										<a class="nav-link" href="boostrap/index.html">More Info <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="bootstrap/index.html">Adopt</a>
									</li>

								</ul>
								<form class="form-inline my-2 my-lg-0">
									<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								</form>
							</div>
						</nav>

					</div> -->



				</div>
				<div class="row">
					<div class="col-md-8 feed">

						<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">History!</h4>
  Snake is the common name for a video game concept where the player maneuvers a line which grows in length, with the line itself being a primary obstacle. The concept originated in the 1976 arcade game Blockade, and the ease of implementing Snake has led to hundreds of versions (some of which have the word snake or worm in the title) for many platforms. After a variant was preloaded on Nokia mobile phones in 1998, there was a resurgence of interest in the snake concept as it found a larger audience. There are over 300 Snake-like games for iOS alone.

</p>
  <hr>
  The Snake design dates back to the arcade game Blockade, developed and published by Gremlin in 1976. It was cloned as Bigfoot Bonkers the same year. In 1977, Atari released two Blockade-inspired titles: the arcade game Dominos and Atari VCS game Surround. Surround was one of the nine Atari VCS (later the Atari 2600) launch titles in the United States and was also sold by Sears under the name Chase. That same year, a similar game was launched for the Bally Astrocade as Checkmate.
</div>

					</div>
					<div class="col-md-4 sidenav">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?php  
							
							print "<h1>Welcome back, " . $_COOKIE['username'] . ' Sir.</h1>';
							
							
							?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?php
							print "<h6>Your favorite quote for today is: </h6>";
							
							?>
							</div>
						<div class="alert alert-warning" role="alert">
						<?php
						
						
						// print "Your favorite quote is" . $_COOKIE['username'] . ' Sir ';
						
						include('config.php');
						
						$data = file_get_contents($path.'/data/'.$_COOKIE['username'].'.txt');
						$data = explode(',', $data);
											 
						 print "<h3>$data[1]</h3>";
						 			
						?>
						</div>	
						
					</div>


				</div>
				<div class="row footer">
					<div class="col-md-4">
						<div class="alert alert-primary" role="alert">
 Educations from the game
</div>
<div class="alert alert-warning" role="alert">
 <ul>
	 <li>Snake is a classic game that requires players to assess their surroundings and find the quickest or safest route to a point. This is an excellent opportunity to learn about spatial awareness.

</li>
<li>
	The classic game is infamous for using your own success against you when you become so long that you get in your own way. It can teach your child about vital life skills and long term strategic planning.
</li>
<li>
	It can be extremely frustrating to reach such a high level and then lose as you crash into your own tail. The game requires patience in order to grow and a cool head once you inevitably lose. These are all valuable skills to learn for a person.
</li>

 </ul>
</div>
					</div>
					<div class="col-md-8">
						<div class="jumbotron">
  <h1 class="display-4">Wait! Someone has a higher score than you.</h1>
  <?php
  
  
  // print "Your favorite quote is" . $_COOKIE['username'] . ' Sir ';
  
  include('config.php');
  
  $data = file_get_contents($path.'/data/highest.txt');
  $data = explode(',', $data);
  
  
   
   print "<h3>name: $data[1]</h3>";
   print "<h3>score: $data[0]</h3>";
   
  
  
  
  ?>
  <hr class="my-4">
  
  <a class="btn btn-primary btn-lg" href="game.php" role="button">Trying to beat him/her?</a>
</div>
					</div>
				</div>


			</div>
			
			<a href="logout.php">Logout</a>

			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
			 crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			 crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			 crossorigin="anonymous"></script>
			 

		</body>

	</html>
