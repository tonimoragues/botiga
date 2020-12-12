<?php
// Start the session
session_start();
$prod=$_GET["producte"];

include '../config/db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
