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
  $cart[0]=$prod;
} else {
  echo count($cart);
  $cart=$_SESSION["cart"] = $cart;
  $cart[count($cart)]=$prod;
}
$_SESSION["cart"] = $cart;

for($x = 0; $x < count($cart); $x++) {
  echo $cart[$x];
  echo "<br>";
}
?>
