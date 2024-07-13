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
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS User_Info (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  User_Name VARCHAR(30) UNIQUE NOT NULL,
  User_email VARCHAR(50) UNIQUE NOT NULL,
  User_Phone INT(11) UNIQUE NOT NULL,
  User_Password VARCHAR(18) NOT NULL,
  User_BirthDate DATE NOT NULL,
  City VARCHAR(30) NOT NULL,
  Region VARCHAR(30) NOT NULL,
  User_Gender VARCHAR(6) NOT NULL
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table Products created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>