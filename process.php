<?php
	$score=  $_POST['score'];
	include('config.php');
	$filename =$path.'/data/highest.txt';   
	$newdata=$score.','.$_COOKIE["username"];
	
	$data = file_get_contents($filename);
	$data = explode(',', $data);
	

	if(!isset($_COOKIE["username"])){
		header("Location:firstpage.php");
		exit();
	}

	if(intval($score)>intval($data[0])){
		file_put_contents($filename,$newdata);
	}
	


		
	header("Location:game.php");
	exit();
	
?>