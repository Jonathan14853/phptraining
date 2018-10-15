<?php

	$dbhost = "jonathan.com";
	$dbuser = "root";
	$dbpass = "password";
	$db     ="employee";
	
	$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
	
	//checking connection
	
	if($conn->connect_error){
		echo "Connection failed";
	}else{
		echo "Connection successfull";
	}
?>
