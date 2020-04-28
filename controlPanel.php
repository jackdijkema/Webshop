<?php
require 'database.php';
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
	<link rel="stylesheet" href="css/controlpanel.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/login.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<header>
		<?php include 'templates/mNavigatie.php'; ?>
	</header>
	<Main>
		<form method="POST" action="insertProduct.php" enctype="multipart/form-data">
			<h1> insert new product</h1>
			<label> Productname</label> <br>
			<input type="text" id="productName" name="productName"> <br>

			<label> Omschrijving</label> <br>
			<input type="text" id="productDescription" name="productDescription"> <br>

			<label> Prijs</label> <br>
			<input type="number" id="productPrice" name="productPrice"> <br>

			<label> Product Photo</label> <br>
			<input type="file" id="productPhoto" name="productPhoto"> <br>
			<br>
			<input type="submit" value="Insert new product">
			<?php echo htmlspecialchars($_SESSION['insertError']); ?>
		</form>

		<table>
			<h1>All products:</h1>
			<tr>
				<th>ID</th>
				<th>Product name</th>
				<th>Omschrijving</th>
				<th>Prijs</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php

			$query = "SELECT * FROM Producten";
			$result = $conn->query($query);
			//$query = "SELECT * FROM Producten";
			//$result = $conn->query($query);
			//$result = mysqli_fetch_array($result);

			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				$id = $row['id'];
				echo "<tr><td>" . $row['id'] . "</td><td>" . $row['naam'] . "</td><td>" . $row['omschrijving'] . "</td><td>" . $row['prijs'] . "</td>"
					. '<td><a class="Login" id="Login" href="editProduct.php?id=' . $id . '"><button>Edit</button></a></td>'
					. '<td><a class="Login" id="Login" href="deleteProduct.php?id=' . $id . '"><button>Delete</button></a></td></tr>';
			}
			?>
		</table>

	</main>
</body>

</html>