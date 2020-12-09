<?php

$uri=trim($_SERVER['REQUEST_URI'],'/');
$path=explode('/',$uri.'/',-1);

switch ($path[0]) {
    case "productes":
        if (array_key_exists(1,$path)) {
            $codi=$path[1];
            include 'fitxa.php';
        }
        else {
            include 'index.php';
        }
        break;
    case "carreto":
        include 'carreto.php';
        break;
}

