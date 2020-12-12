<?php

$routes = array(
    "productes"=>"index",
    "productes/{codi}"=>"fitxa",
    "carreto"=>"carreto"
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
            break;
        }
    } elseif ($ruta == $uri) {
        echo $accio;
        break;
    }
}

require $accio.".php";


