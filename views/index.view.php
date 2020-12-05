<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
<?php include "capsalera.php"; ?>

<div class="container">
    <div class="row">
        <?php

        while($row = $result->fetch_assoc()) {

            ?>

            <div class="col-sm-3">
                <img src="img/<?php echo $row["codi"]; ?>.jpg" alt="" class="img-fluid">
                <h4 class="text-center" style="font-family: 'Julius Sans One', sans-serif;"><?php echo $row["nom"]; ?></h4>
                <a href="fitxa.php?codi=<?php echo $row["codi"]; ?>" class="stretched-link"></a>
            </div>

            <?php
        }
        ?>

    </div>
</div>
</body>
</html>