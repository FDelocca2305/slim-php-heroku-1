<?php

$palabra = array("H","o","l","a");

echo(invertirPalabra($palabra));

function invertirPalabra($palabra){
    $cantLetras = count($palabra);
    $palabraNew = "";

    for ($i=$cantLetras; $i > 0 ; $i--) { 
        $palabraNew .= $palabra[$i-1];
    }

    return $palabraNew;
}

?>