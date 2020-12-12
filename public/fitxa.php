<?php
if(!isset($_COOKIE['lang'])) {
  setcookie('lang', 'es');
  $lang='es';
} else {
  $lang=$_COOKIE['lang'];
}

include '../config/db.php';
require('../classes/Producte.php');
include "traduccions.php";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $stmt = $pdo->prepare("SELECT codi, nom, preu, descripcio FROM productes where codi=$codi");
  $stmt->execute();
  $producte = $stmt->fetchAll(PDO::FETCH_CLASS, 'Producte');

} catch (PDOException $e) {
  die($e->getMessage());
}

require('../views/fitxa.view.php');

?>

