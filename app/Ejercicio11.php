<?php

$numero;

for ($i=1; $i <= 4; $i++) { 
    calcularPotencias($i);
}

function calcularPotencias($numero){
    $potencia = 0;
    for ($i=1; $i <= 4; $i++) { 
        $potencia = pow($numero,$i);
        echo("\nPotencia de ".$numero." ".$potencia."\n");
    }
}

?>