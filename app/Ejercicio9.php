<?php
/**
 * Delocca Franco
 * Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
 *contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
 *lapiceras.
 */

 $lapiceraUno = array(
                "Color" => "azul",
                "Marca" => "bic",
                "Trazo" => "fino",
                "Precio" => 20,
            );

 $lapiceraDos = array(
                "Color" => "negra",
                "Marca" => "fabercastel",
                "Trazo" => "ultrafino",
                "Precio" => 25,
            );

$lapiceraTres = array(
                "Color" => "rosa",
                "Marca" => "papermate",
                "Trazo" => "grueso",
                "Precio" => 16,
            );
            
echo("\nLapicera Uno\n");
foreach($lapiceraUno as $posicion => $valor){
    echo($posicion."  ".$valor."\n");
}
echo("\nLapicera Dos\n");
foreach($lapiceraDos as $posicion => $valor){
    echo($posicion."  ".$valor."\n");
}
echo("\nLapicera Tres\n");
foreach($lapiceraTres as $posicion => $valor){
    echo($posicion."  ".$valor."\n");
}

?>