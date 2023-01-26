<?php

$servername = "sql4.webzdarma.cz:3306";
$username = "databasetalr9381";
$password = "Talrus93*";
$dbname = "databasetalr9381";


	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
	
		die("Connection Failed  ". $conn->connect_error);
	} 
	
?>