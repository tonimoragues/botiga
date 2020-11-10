<?php
// Start the session
session_start();
$prod=$_GET["producte"];
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
if (!isset($_SESSION["cart"])) {
  $cart[0]=$producte;
} else {
  $cart=$_SESSION["cart"] = $cart;
  $cart[count($cart)]=$producte;
}
$_SESSION["cart"] = $cart;

for($x = 0; $x < count($cart); $x++) {
  echo $cart[$x];
  echo "<br>";
}
?>
