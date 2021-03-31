<?php
include("Usuario.php");

$usuario = new Usuario();

//$filename = $_GET["filename"];

$filename = "usuarios.csv";

var_dump($filename);

echo $usuario::_readFile($filename);

?>