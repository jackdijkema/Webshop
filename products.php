<?php
session_start();
require_once 'database.php';

$query = "SELECT * FROM Producten";
$result = $conn->query($query);

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Keyboard Webshop - Products</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/Producten.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body onload="LoginCall()">
  <header>
    <?php

      if ($_SESSION['loggedOn'] == true) {
        if ($_SESSION['medewerker'] == true) {
  
          include 'templates/mNavigatie.php';
        } else {
          include 'templates/navigatie.php';
        }
      } else {
        include 'templates/navigatieLogin.php';
      }
      ?>
  </header>
  <main>
    <?php
    // Hide login/register popup when logged in.
    if ($_SESSION['loggedOn'] == false) {
      include 'templates/popUp.php';
    }
    ?>
    <section class="products">

      <?php
      if ($result->num_rows > 0) {
        while ($rij = $result->fetch_assoc()) {

          $id = $rij['id'];
          $product = $rij['naam'];
          $omschrijving = $rij['omschrijving'];
          $prijs = $rij['prijs'];
          $filename = $rij['filename'];

          echo '<div class="card">';
          echo '<div class="product-info">';
          echo '<img src="img/' . $filename . ' "alt="Keyboard">';
          echo '</div>';
          echo '<div class="product-info">';
          echo '<h1>' . $product . '</h1>';
          echo '<h2>' . $omschrijving . '</h2>';
          echo '<h3>€ ' . $prijs . '</h3>';
          echo '<a href="AddToCart.php?id=' . $id . '"> <button>Add to cart</button></a>';
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo '<h1>Geen producten gevonden.</h1>';
      }
      ?>


    </section>

  </main>
  <script type="text/javascript" src="js/login.js"></script>
</body>

</html>
