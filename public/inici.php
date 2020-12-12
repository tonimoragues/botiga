<?php

$routes = array(
    "productes"=>"ProductesController",
    "productes/{codi}"=>"FitxaController",
    "carreto"=>"CarretoController"
);

$uri=trim($_SERVER['REQUEST_URI'],'/');

foreach($routes as $ruta => $accio) {
    if (preg_match('/\{[a-z]+\}/', $ruta)) {
        $pattern = "/". preg_replace("/\/\{[a-z]+\}/", "\/[0-9]+/", $ruta);
        if (preg_match($pattern, $uri)) {
            preg_match('/[0-9]+/', $uri, $matchesu);
            preg_match('/\{[a-z]+\}/', $ruta, $matchesr);
            $varname=trim(trim($matchesr[0],"{"),"}");
            $$varname=$matchesu[0];
            echo $accio;
        }
    } elseif ($ruta == $uri ) {
        echo $accio;
    } else {
        echo "la ruta no és vàlida";
    }
}


