<?php

session_start();

$cart = $_SESSION['cart'];


foreach ($cart as $prod) {

	$query = 'INSERT INTO orders VALUES()';
	$result = $conn->query($query);

	


} 
