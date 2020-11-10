<?php
$servername = "localhost";
$username = "admin";
$password = "manacor";
$dbname = "botiga";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
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
<?php

$sql = "SELECT codi, nom, preu, descripcio FROM productes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>

    <div class="col-sm-3">
      <img src="img/<?php echo $row["codi"]; ?>.jpg" alt="" class="img-fluid">
      <h4 class="text-center"><?php echo $row["nom"]; ?></h4>
    </div>

<?php
}
} else {
echo "0 results";
}
$conn->close();
?>

  </div>
</div>
</body>
</html>
