<?php
include '../config/db.php';


try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $stmt = $pdo->prepare("SELECT codi, nom, preu, descripcio FROM productes");
    $stmt->execute();
    $productes = $stmt->fetchAll(PDO::FETCH_CLASS);

} catch(PDOException $e) {
    die($e->getMessage());
}

require('../views/index.php');
?>