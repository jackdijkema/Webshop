<?php
session_start();
require_once 'database.php';

$query = "SELECT * FROM Producten";
$result = $conn->query($query);

$cart = $_SESSION['cart'];

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Keyboard Webshop - Products</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/shopping-cart.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body onload="LoginCall()">
  <header>
    <?php
    if ($_SESSION['loggedOn'] == true) {
      include 'templates/navigatie.php';
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
      //Remove all products button
      echo '<a href="removeAllCart.php"><button>Remove all products</button></a>';


      // $prod = product id
      foreach ($cart as $prod) {

        $query = "SELECT *  FROM Producten WHERE id=" . $prod . "";
        $result = $conn->query($query);
        $result = mysqli_fetch_array($result);

        $price = $result['prijs'];
        $total += $price;
				
        echo '<div class="card">';
        echo '<div class="product-info">';
        echo '<img src="img/' . $result['filename'] . ' "alt="Keyboard">';
        echo '</div>';
        echo '<div class="product-info">';
        echo '<h1>' . $result['naam'] . '</h1>';
        echo '<h2>' . $result['omschrijving'] . '</h2>';
        echo '<h3>€ ' . $result['prijs'] . '</h3>';
        echo '</div>';
        echo '</div>';
      }

      echo '<h1>Total price: ' . $total . '</h1>';
      ?>
    </section>

  </main>
  <script type="text/javascript" src="js/login.js"></script>
</body>

</html>
