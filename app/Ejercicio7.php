<?php
/**
 * Delocca Franco
 * Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
 *Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
 *salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
 *las estructuras while y foreach.
 */

 $array = array();
 $contador = 0;

echo("Estructura FOR\n");
 for ($i=1; $i <= 10; $i++) { 
     $array[$i] = ($i*2)-1;

     echo($array[$i]."\n");
 }

echo("Estructura FOREACH\n");

foreach($array as $item){
    echo($item."\n");
}

echo("Estructura WHILE\n");

 
 while ($contador < count($array)) {
     echo($array[$contador+1]."\n");
     $contador++;
 }

 
?>