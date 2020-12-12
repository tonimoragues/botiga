<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>

<?php include "capsalera.view.php"; ?>

<div class="container">
    <div class="row">

        <?php foreach ($productes as $producte) { ?>

            <div class="col-sm-3">
                <img src="/img/<?= $producte->codi ?>.jpg" alt="" class="img-fluid">
                <h4 class="text-center" style="font-family: 'Julius Sans One', sans-serif;"><?= $producte->nom ?></h4>
                <a href="/productes/<?= $producte->codi ?>" class="stretched-link"></a>
            </div>

        <?php         }     ?>

    </div>
</div>
</body>
</html>