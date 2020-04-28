<?php
require 'database.php';
session_start();
$id = $_GET['id'];

$query = "DELETE FROM Producten WHERE id='" . $id . "';";

$result = $conn->query($query);

header("Location: controlPanel.php");