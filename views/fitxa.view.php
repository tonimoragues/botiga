<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Roboto', sans-serif;">
<?php include "capsalera.view.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-sm"><a href="/productes"><?php echo $traduccions[$lang]['tornar']; ?>  <i class="fas fa-undo"></i></a></div>
    </div>
    <div class="row">
        <div class="col-sm-6"><img src="/img/<?= $producte->codi ?>.jpg" alt="" class="img-fluid"></div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-11"><h2 style="font-family: 'Julius Sans One', sans-serif;"><?= $producte->nom ?></h2></div>
                <div class="col-sm-11 my-2"><h4><?= $producte->preu;?> €</h4></div>
                <div class="col-sm-11"><a href="carreto.php?producte=<?= $producte->codi;?>" class="btn btn-primary"><?php echo $traduccions[$lang]['afegir']; ?><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-sm-11 my-3"><p><?= $producte->descripcio;?></p></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
