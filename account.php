<?php
$username=  $_POST['name'];
$password=  $_POST['password'];
	
include ('config.php');
	
file_put_contents($path.'/data/account'.'.txt',','.$username.','.$password,FILE_APPEND);

print $username;


?>