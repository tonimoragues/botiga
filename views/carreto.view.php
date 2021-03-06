<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<?php include "capsalera.view.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <table class="table">
                <thead>
                <tr>
                    <th class="w-50" scope="col">Producte</th>
                    <th scope="col">Preu</th>
                    <th scope="col">Quantitat</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $total=0;
                for($x = 0; $x < count($cart); $x++) {

                    //consulta que teni a la fitxa
                    $codi=$cart[$x][0];

                    $sql = "SELECT codi, nom, preu FROM productes where codi=$codi";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $nom=$row["nom"];
                    $preu=$row["preu"];
                    //$nom=$cart[$x][0];
                    //$preu=20;
                    $quantitat=$cart[$x][1];
                    $total=$total+($preu*$quantitat);

                    ?>
                    <tr>
                        <td><img class="img-fluid w-25 mr-4" src="img/<?php echo $codi; ?>.jpg" alt=""><?php echo $nom; ?></td>
                        <td><?php echo $preu; ?></td>
                        <td><?php echo $quantitat; ?></td>
                        <td><?php echo $preu*$quantitat; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">TOTAL</th>
                    <th scope="col"><?php echo $total; ?> €</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row justify-content-between my-4">
        <div class="col-4">
            <a href="index.php" class="btn btn-primary btn-block">SEGUIR COMPRANT</a>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-primary btn-block">PAGAR</button>
        </div>
    </div>
</div>
</body>
</html>
