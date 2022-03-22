<?php
	$username=  $_POST['username'];
	$password=  $_POST['password'];
	if($username==''){
		header("Location:login.php?error=usernameempty");
		exit();
	}
	else if($password==''){
		
		header("Location:login.php?error=passwordempty");
		exit();
	}
	else{
		include('config.php');
		$data = file_get_contents($path.'/data/account.txt');
		$data = explode(',', $data);
		 for ($i = 0; $i < count($data); $i++)  {
			 if($username==$data[$i]){
				if($password==$data[$i+1]){
					header("Location:firstpage.php");
					setcookie('username',$username );
					exit();
				}
				else{
					header("Location:login.php?error=wrongp");
					exit();
				}
			 }
		            
		        }
				header("Location:login.php?error=wrong");
				exit();
				
	}
	

?>