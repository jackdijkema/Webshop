<?php
require_once 'database.php';
session_start();
$productname = $_POST['productName'];
$description = $_POST['productDescription'];
$price = $_POST['productPrice'];


$insertFile = basename($_FILES['productPhoto']["name"]);
$target_dir = 'img/';
$target_file = $target_dir . basename($_FILES['productPhoto']["name"]);

//TODO rewrite image check 
$check = getimagesize($_FILES["productPhoto"]["tmp_name"]);
if ($check !== false) {
    move_uploaded_file($_FILES['productPhoto']["tmp_name"], $target_file);
		header('Location: products.php');
} else {
    echo "File is not an image.";
}

$query = "INSERT INTO Producten (naam, omschrijving, prijs, filename) 
					VALUES('" . $productname . "', '" . $description . "' ,'" . $price . "', '" . $insertFile . "') ;";
//var_dump($query);



$result = $conn->query($query);



