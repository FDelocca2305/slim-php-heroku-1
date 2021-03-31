<?php

include("Usuario.php");

$usuario = new Usuario();

$usuario->_password = $_POST["clave"];
$usuario->_email = $_POST["email"];

echo $usuario::_loginUser($usuario, "usuarios.csv");

?>