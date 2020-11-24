<?php
$lang=$_GET['lang'];
$traduccions = array(
    "es" => array(
        "afegir" => "añadir",
        "pagar" => "pagar",
        "continuar" => "seguir comprando"
    ),
    "cat" => array(
        "afegir" => "añadir",
        "pagar" => "pagar",
        "continuar" => "seguir comprando"
    )
  )

echo $traduccions['es']['afegir'].'</br>';
echo $traduccions['es']['pagar'].'</br>';
echo $traduccions['es']['continuar'].'</br>';
