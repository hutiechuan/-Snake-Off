<?php
	$username=  $_POST['name'];
	$password=  $_POST['password'];
	$status=  $_POST['status'];
	include('config.php');
	$data = file_get_contents($path.'/data/account.txt');
	$data = explode(',', $data);
	 for ($i = 0; $i < count($data); $i+=2)  {
		if($username==$data[$i]){
			print "The username has already existed. Please enter a new one!";
			exit();
		 }
		 
		 }
		 

	
	file_put_contents($path.'/data/'.$username.'.'.'txt',$username.','.$status.','.$password."\n",FILE_APPEND);
		
	file_put_contents($path.'/data/account'.'.txt',','.$username.','.$password,FILE_APPEND);
	
	print "Suceess!";
	
	

?>