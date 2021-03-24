<?php 

/*
Delocca Franco
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.*/

$palabra = "Programacions";

$max = 11;

if (validarCaracteres($palabra,$max)) {
    echo("<br>Pertenece al listado de palabras");
}else{
    echo("<br>No Pertenece al listado de palabras");
}

function validarCaracteres($palabra, $max){
    
    if (strlen($palabra) > $max) {
        echo("Supera el maximo de caractres");
    }
    else{
        echo("No supera el maximo de caracteres");
    }

    if ($palabra == "Recuperatorio" || $palabra == "Parcial" || $palabra == "Programacion") {
        return 1;
    }else{
        return 0;
    }
}

?>