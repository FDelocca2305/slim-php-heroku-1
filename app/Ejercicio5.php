<?php   
/**Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”. */

$numero = 60;

$num = strval($numero);

$rest = convertNumberToWord(substr($num,0,1),substr($num,1,1));

echo $rest;

function convertNumberToWord($num1, $num2){
    $primeraPalabra = "";
    $segundaPalabra = "";

    switch ($num1) {
        case '2':
                if ($num2 == '0') {
                    $primeraPalabra = "veinte";
                }else{
                    $primeraPalabra = "veinti ";
                }
                
            break;
        case '3':
                $primeraPalabra = "treinta ";
            break;
        case '4':
                $primeraPalabra = "cuarenta ";
            break;
        case '5':
                $primeraPalabra = "cincuenta ";
            break;
        case '6':
                $primeraPalabra = "sesenta ";
            break;
    }

    switch ($num2) {
        case '1':
            $segundaPalabra = "y uno";
            break;
        case '2':
            $segundaPalabra = "y dos";
            break;
        case '3':
            $segundaPalabra = "y tres";
            break;
        case '4':
            $segundaPalabra = "y cuatro";
            break;
        case '5':
            $segundaPalabra = "y cinco";
            break;
        case '6':
            $segundaPalabra = "y seis";
            break;
        case '7':
            $segundaPalabra = "y siete";
            break;
        case '8':
            $segundaPalabra = "y ocho";
            break;
        case '9':
            $segundaPalabra = "y nueve";
            break;
        case '0':
            $segundaPalabra = "";
            break;
    }
    

    return $primeraPalabra.$segundaPalabra;
}

?>