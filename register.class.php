<?php 
include 'database.php';
class insertRegister extends Databases
{
	public function makeUser()
	{

// Pulling information out of form Registreren	
	$username = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pnumber  = $_POST['tel'];

// Making INSERT query.

	$query = "INSERT INTO klantgegevens VALUES (1, ".$username." ,'".$email."', '".$password."', ".$pnumber.")";

// Making connection with DB and Excecuting Query

	$result = $this->connect()->query($query);

	$result = $this->connect()->excecute($query);

// result check
		if ($result == false)
		{
			echo 'Fout in query Registreren';
		}
	}
}
?>
