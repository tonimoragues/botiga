<?php
include '../config/db.php';


try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $stmt = $pdo->prepare("SELECT codi, nom, preu, descripcio FROM productes");
    $stmt->execute();
    $prodcutes=$stmt->fetchAll(PDO::FETCH_CLASS);
    var_dump($prodcutes);
} catch(PDOException $e) {
    die('Connexió fallida a la bdd.');
}

require('../views/index.php');
?>