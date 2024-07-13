<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Egyfood_Product";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE If Not EXISTS Egyfood_Product";

// sql to create table
$sql = "CREATE TABLE If Not EXISTS UserOrder (
Product_id INT(6) NOT Null,
Full_Name VARCHAR(50) NOT NULL,
Phone_Number INT(11)  NOT NULL,
City VARCHAR(30) NOT NULL,
Region VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error creating table: " . $conn->error;
}


$product_id = array_column($_SESSION['cart'], column_key: 'product_id');
$Full_Name = $_REQUEST['FullName'];
$Phone_Number = $_REQUEST['Phonenumber'];
$City = $_REQUEST['City'];
$Region = $_REQUEST['Region'];
foreach ($product_id as $id) {
  $sql = "INSERT INTO UserOrder  VALUES ('$id','$Full_Name','$Phone_Number','$City','$Region')";
  if (mysqli_query($conn, $sql)) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>buy</title>
  <!-- Render All Elemets Normally -->
  <link rel="stylesheet" href="../CSS/normalize.css">
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="../CSS/all.min.css">
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="../CSS/thank you.css">
</head>

<body>
  <div class="container">
    <h3>your Order has been confirmed ,return to home page</h3>
    <form action="../php/FullMenu.php" method="post">
      <button type="submit" name="Remove">
        <img src="../Media/Egyfood_Logo.png" alt="logo.png">
      </button>
    </form>
  </div>
</body>

</html>