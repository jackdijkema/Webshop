<?php
require_once 'database.php';
session_start();

$id = $_SESSION['id'];
$cart = $_SESSION['cart'];

if (empty($cart)) {
	//TODO Error message
	header("Location: products.php");
	exit();
}

$cartArray = implode(',', $cart); // Make array->string, delimiter= ,

$query = "INSERT INTO bestelling (klant_id, producten) VALUES( '" . $id . "', '" . $cartArray . "')";

$result = $conn->query($query);
