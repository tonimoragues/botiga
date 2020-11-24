<?php
$lang=$_GET['lang'];
$traduccions = array(
    "es" => array(
        "afegir" => "añadir",
        "pagar" => "pagar",
        "continuar" => "seguir comprando"
    ),
    "cat" => array(
        "afegir" => "afegir",
        "pagar" => "pagar",
        "continuar" => "seguir comprant"
    )
  );

echo $traduccions[$lang]['afegir'].'</br>';
echo $traduccions[$lang]['pagar'].'</br>';
echo $traduccions[$lang]['continuar'].'</br>';
