<?php

	$host="localhost";
  	$user="root";
  	$pass="";
 	$db="bank1";
  	$mysqli;
// Create connection
$conn = new mysqli($host, $user, $pass,$db);

	

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>

