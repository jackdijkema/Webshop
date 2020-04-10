<?php 
require_once 'database.php';


		// Pulling information out of form Registreren	
		$username = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$pnumber  = $_POST['tel'];

		// Making INSERT query.

	$query = "INSERT INTO klantgegevens (naam,email,wachtwoord,telefoonnummer)VALUES ( '".$username."' ,'".$email."', '".$password."', ".$pnumber.")";
		// Making connection with DB and Excecuting Query

		$result = $conn->query($query); 

		// result check
		if ($result == false)
		{
		echo "niet gelukt";
		}
		sleep(10);
		header("Location: index.php");
?>
