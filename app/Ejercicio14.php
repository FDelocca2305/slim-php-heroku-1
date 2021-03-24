<?php

/*
Delocca Franco
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.*/

$valor = 12;

if (esPar($valor)) {
    echo("Es par");
}elseif(esImpar($valor)){
    echo("Es impar");
}

function esPar($valor){
    if ($valor%2 == 0) {
        return TRUE;
    }else{
        return FALSE;
    }
}

function esImpar($valor){
    if ($valor%2 == 0) {
        return FALSE;
    }else{
        return TRUE;
    }
}

?>