<?php 
include_once "Fabrica.php";

$fb = new Fabrica("Franco.SA");
$op1 = new Operario(43463124, "Delocca", "Franco", 34.50);
$op2 = new Operario(28746286, "Laura", "Garcia", 41);

if ($fb->Add($op1)) {
    echo("Se agrego un nuevo operario<br>");
}else{
    echo("NO se agrego un nuevo operario");
}

if ($fb->Add($op2)) {
    echo("Se agrego un nuevo operario");
}else{
    echo("NO se agrego un nuevo operario");
}

echo("<br>");

$fb->MostrarOperarios();

echo("<br>");

echo($fb::MostrarCostos($fb));

if ($fb->Remove($op2)) {
    echo("<br>Se borro un operario<br>");
}else{
    echo("<br>NO se borro un operario<br>");
}

echo("<br>");
$fb->MostrarOperarios();

?>