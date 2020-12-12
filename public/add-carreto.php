<?php
session_start();

if (!isset($_SESSION["cart"])) {
    $linia = array($prod, 1);
    $cart[0] = $linia;
} else {
    $cart = $_SESSION["cart"];
    $new = 1;
    for ($x = 0; $x < count($cart); $x++) {
        if ($cart[$x][0] == $prod) {
            $cart[$x][1] = $cart[$x][1] + 1;
            $new = 0;
            break;
        }
    }
    if ($new == 1) {
        $linia = array($prod, 1);
        $pos = count($cart);
        $cart[$pos] = $linia;
    }
}
$_SESSION["cart"] = $cart;

header("Location: /carreto");

//redirigir a carreto.php
