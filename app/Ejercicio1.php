<?php
/*
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.
*/

$sumador = 0;

for ($i=1; $i <= 1000; $i++) { 
    $sumador = $i+$sumador;

    if ($sumador > 1000) {
        echo("\nSe sumaron ");
        echo ($i-1);
        echo(" Numeros");
        echo("\n");
        echo ("Suma: ".($sumador-$i));
        break;
    }
}


?>
