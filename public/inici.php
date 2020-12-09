<?php

$uri=trim($_SERVER['REQUEST_URI'],'/');
$path=explode($uri,'/');

switch ($path[0]) {
    case "productes":
        include 'index.php';
        break;
    case "carreto":
        include 'carreto.php';
        break;
    default:
        throw new \Exception('Unexpected value');
}

