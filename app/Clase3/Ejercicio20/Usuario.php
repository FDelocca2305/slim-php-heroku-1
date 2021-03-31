<?php
class Usuario
{

    public $_usuario;
    public $_password;
    public $_email;

    /* function __construct($usuario, $pass)
    {
        $this->_usuario = $usuario;
        $this->_password = $pass;
    } */

    static function _validarUsuario($usuario)
    {
        if (isset($usuario->_usuario) && isset($usuario->_password) && isset($usuario->_email)) {

            $miarchivo = fopen("usuarios.csv","a");
            
            if (fwrite($miarchivo,$usuario->_usuario.",".$usuario->_email.",".date("d/m/Y")."|\n")) {
                echo "Se guardo correctamente";
            }else{
                echo "No se pudieron guardar los datos";
            }
    
            fclose($miarchivo);
                
        } else {
            echo "Faltan datos :c";
        }
    }

    
}
