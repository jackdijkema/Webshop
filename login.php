<?php
session_start();
require_once 'database.php';

// Pulling information from login form on index.php
$username = $_POST['username'];
$password = $_POST['password'];

// Query for logging in

$query = "SELECT * FROM klantgegevens WHERE naam='" . $username . "' AND wachtwoord='" . $password . "'";

$result = $conn->query($query);

if ($result->num_rows > 0) {

	$result = mysqli_fetch_array($result);

	$_SESSION['id'] = $result['id'];
	$_SESSION['email'] = $result['email'];
	$_SESSION['naam'] = $result['naam'];
	$_SESSION['loggedOn'] = true;

	header("Location: index.php");
} else {

	$query = "SELECT * FROM medewerker WHERE naam='" . $username . "' AND wachtwoord='" . $password . "'";

	$result = $conn->query($query);

	if ($result->num_rows > 0) {

		$result = mysqli_fetch_array($result);

		$_SESSION['id'] = $result['id'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['naam'] = $result['naam'];
		$_SESSION['loggedOn'] = true;
		$_SESSION['medewerker'] = true;

		header("Location: index.php");
	} else {

		$_SESSION['loginError'] = '* Login information incorrect, try again!';

		$_SESSION['loggedOn'] = false;

		header("Location: index.php");
	}
}
