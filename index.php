<?php

session_start();

if ($_SESSION['loggedOn'] == true)
{
	echo $_SESSION['loginAccepted'] ,' ', $_SESSION['naam'];
	$login = $SESSION['loggedOn'];
} 
else 
{
	echo $_SESSION['loginError'];
	session_destroy();
} 
?>
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Keyboard Webshop - Homepage</title>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/login.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body onload="LoginCall()">
    <header>
		<?php 
	if ($_SESSION['loggedOn'] == true)
	{
		include 'templates/navigatie.php';	
	} 
	else {
		include 'templates/navigatieLogin.php';
	} 
		?>
    </header>

    <main>
        <div class="Main_title">
        <h1>Keyboard Shop</h1>
            <h2>De enige echte!</h2>
                </div>
								<?php
								// Hide login/register popup when logged in.
								if ($_SESSION['loggedOn'] == false)
								{
								include 'templates/popUp.php';
								} 
								?>
    </main>
     <script type="text/javascript" src="js/login.js"></script>  
</body>
</html>
