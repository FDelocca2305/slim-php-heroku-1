<?php

include("Usuario.php");

$usuario = new Usuario();

$usuario->_usuario = $_POST["usuario"];
$usuario->_password = $_POST["clave"];
$usuario->_email = $_POST["email"];

echo $usuario::_validarUsuario($usuario);

?>