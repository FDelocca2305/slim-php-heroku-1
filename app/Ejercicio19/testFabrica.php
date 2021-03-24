<?php 
include_once "Fabrica.php";

$fb = new Fabrica("Franco.SA");
$op1 = new Operario(43463124, "Delocca", "Franco", 34.50);
$op2 = new Operario(28746286, "Laura", "Garcia", 40);

if ($fb->Add($op1)) {
    echo("Se agrego un nuevo operario");
}

if ($fb->Add($op2)) {
    echo("Se agrego un nuevo operario");
}

$fb->MostrarOperarios();

?>