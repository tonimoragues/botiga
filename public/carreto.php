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
     ?>
    <tr>
      <th scope="row"><?php echo $cart[$x][0];?></th>
      <td>20</td>
      <td><?php echo $cart[$x][1];?></td>
      <td>20</td>
    </tr>
  <?php } ?>
  </tbody>
</table>
    </div>
  </div>
</div>
</body>
</html>
