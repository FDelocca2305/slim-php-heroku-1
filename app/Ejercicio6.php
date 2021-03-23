<?php
/*
*Delocca Franco
*Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado. */

$array = array();
$sumador = 0;
$promedio = 0;

for ($i=0; $i < 5; $i++) { 
    $array[$i] = rand(0,10);
    $sumador += $array[$i];  
}

$promedio = $sumador / 5;

if ($promedio > 6) {
    echo("Promedio mayor a 6");
}elseif ($promedio < 6) {
    echo("Promedio menor a 6");
}else{
    echo("Promedio igual a 6");
}

echo("\nPromedio: ".$promedio);

?>