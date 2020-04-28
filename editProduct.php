<?php
require_once 'database.php';

$id = $_GET['id'];

$name = $_POST['productName'];
$description = $_POST['productDescription'];
$price = $_POST['productPrice'];
$query = "SELECT * FROM Producten WHERE id='" . $id . "'";

$result = $conn->query($query);

$result = mysqli_fetch_array($result);
$productName = $result['naam'];
$productDescription = $result['omschrijving'];
$productPrice = $result['prijs'];


$query = "UPDATE Producten SET naam='" . $name . "', omschrijving='" . $description . "', prijs='" . $price . "' WHERE id='" . $id . "';";
?>

if (isset($_POST['submit'])) {

  $result = $conn->query($query);
  header("Location: controlPanel.php");
}
?>
<html>

<body>
  <main>
    <form method="POST" action="" enctype="multipart/form-data">
      <h1> Edit product</h1>
      <label> Productname</label> <br>
      <input type="text" id="productName" value="<?php echo htmlspecialchars($productName); ?>" name="productName"> <br>

      <label> Omschrijving</label> <br>
      <input type="text" id="productDescription" value="<?php echo htmlspecialchars($productDescription); ?>" name="productDescription"> <br>

      <label> Prijs</label> <br>
      <input type="number" id="productPrice" value="<?php echo htmlspecialchars($productPrice); ?>" name="productPrice"> <br>

      <label> Product Photo</label> <br>
      <input type="file" id="productPhoto" name="productPhoto"> <br>
      <br>
      <input type="submit" name="submit" value="Edit product">

    </form>
  </main>
</body>

</html>