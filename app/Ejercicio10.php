<?php 
/**
 * Delocca Franco
 * Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
 *contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
 *Arrays de Arrays.
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

$arrayAsoc = array(
    "Lapicera Uno" => $lapiceraUno,
    "Lapicera Dos" => $lapiceraDos,
    "Lapicera Tres" => $lapiceraTres,
);

$arrayIndex = array($lapiceraUno,$lapiceraDos,$lapiceraTres);


echo("Array Asociativo");
foreach($arrayAsoc as $indice => $array){
    echo("\n\n".$indice."\n");
    foreach($array as $indice => $valor){
        echo("\n".$indice.": ".$valor);
    }
}

echo("\n\nArray Indexado\n");
foreach($arrayIndex as $indice => $array){
    echo("\n\n".$indice."\n");
    foreach($array as $indice => $valor){
        echo("\n".$indice.": ".$valor);
    }
}




?>