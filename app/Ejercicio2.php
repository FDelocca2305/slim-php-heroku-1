<?php  
/**Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple. */


$hoy = date("F j, Y, g:i a");           
echo $hoy;
$hoy = date("m.d.y");
echo "\n".$hoy;
$hoy = date("j, n, Y");
echo "\n".$hoy;
$hoy = date("Ymd");
echo "\n".$hoy;
$hoy = date('h-i-s, j-m-y');
echo "\n".$hoy;
$hoy = date('jS \d\a\y.');
echo "\n".$hoy;
$hoy = date("D M j G:i:s T Y");
echo "\n".$hoy;
$hoy = date('H:m:s');
echo "\n".$hoy;
$hoy = date("H:i:s");
echo "\n".$hoy;
$hoy = date("Y-m-d H:i:s");
echo "\n".$hoy;

$mesActual = date('m');
$d = date('d');


switch ($mesActual) {
    case '01':
        echo("Verano");
        break;
    case '02':
        echo("Verano");
        break;
    case '03':
        if ($d < 21) {
            echo("Verano");
        }else{
            echo("Otoño");
        }
        break;
    case '04':
        echo("Otoño");
        break;
    case '05':
        echo("Otoño");
        break;
    case '06':
        if ($d < 20) {
            echo("Otoño");
        }else{
            echo("Invierno");
        }
        break;
    case '07':
        echo("Invierno");
        break;
    case '08':
        echo("Invierno");
        break;
    case '09':
        if ($d < 20) {
            echo("Invierno");
        }else{
            echo("Primavera");
        }
        break;
    case '10':
        echo("Primavera");
        break;
    case '11':
        echo("Primavera");
        break;
    case '12':
        if ($d < 20) {
            echo("Primavera");
        }else{
            echo("Verano");
        }
        break;
}


?>