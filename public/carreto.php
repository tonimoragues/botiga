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
  $linia=array($prod,1);
  $cart[0]=$linia;
} else {
  $cart=$_SESSION["cart"];
  $new=1;
  for($x = 0; $x < count($cart); $x++) {
    if ($cart[$x][0]==$prod) {
      $cart[$x][1]=$cart[$x][1]+1;
      $new=0;
      break;
    }
  }
  if ($new==1) {
    $linia=array($prod,1);
    $pos=count($cart);
    $cart[$pos]=$linia;
  }
}
$_SESSION["cart"] = $cart;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Producte</th>
      <th scope="col">Preu</th>
      <th scope="col">Quantitat</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php
    for($x = 0; $x < count($cart); $x++) {
      $nom='camiseta';
      $preu=20;
      $quantitat=$cart[$x][1];
      $total=0;
     ?>
    <tr>
      <th scope="row"><?php echo $nom; ?></th>
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
      <th scope="col">200 €</th>
    </tr>
  </thead>
</table>
    </div>
  </div>
</div>
</body>
</html>
