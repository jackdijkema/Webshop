<?php
//Database

	
// Making connection to database.
		
		$host = "localhost"; 
		$user = "root";
		$pass = "root";
		$db   = "database";
		
	 	$conn = new mysqli($host,$user,$pass,$db);
		
		if ($conn->connect_error) 
		{			
		die("Connection failed: " . $conn->connect_error);
		}	
		else 
		{
		echo "Connected succesfully";
		} 







?>
