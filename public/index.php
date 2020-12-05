<?php
include '../config/db.php';
require ('../classes/Producte.php');


try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $stmt = $pdo->prepare("SELECT codi, nom, preu, descripcio FROM productes");
    $stmt->execute();
    $productes = $stmt->fetchAll(PDO::FETCH_CLASS, 'Producte');

} catch(PDOException $e) {
    die($e->getMessage());
}

require('../views/index.view.php');
?>