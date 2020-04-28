<?php
require_once 'database.php';
session_start();

if ($_SESSION['medewerker'] == false) {
	
	header("Location: index.php");
	exit();
} 
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Keyboard Webshop - Control Panel</title>
    <script src="https://kit.fontawesome.com/bf381bbffb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/login.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
<body>
	<header>
	<?php include 'templates/mNavigatie.php';?>
	</header>
	<Main>
<form method="POST" action="insertProduct.php" enctype="multipart/form-data">
	<h1> insert new product</h1>
			<label> Productname</label> <br>
			<input type="text" id="productName" name="productName">  <br>
			
			<label> Omschrijving</label>  <br>
				<input type="text" id="productDescription" name="productDescription">  <br>
				
			<label> Prijs</label> <br>
				<input type="number" id="productPrice" name="productPrice">  <br>
				
			<label> Product Photo</label> <br>
				<input type="file" id="productPhoto" name="productPhoto">  <br>
			<br>
	<input type="submit" value="Insert new product">
</form>
</main>
</body>
</html>


