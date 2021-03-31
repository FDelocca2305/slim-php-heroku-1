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

    static function _readFile($filename)
    {
        $archivo = fopen($filename,"r");
        $fila = 1;
        
        while (($datos = fgetcsv($archivo, 1000, "|")) !== FALSE) {
            $numero = count($datos);
            $fila++;
            echo"<ul>";

            for ($c=0; $c < $numero; $c++) {
                
                $array = explode(",",$datos[$c]);
                echo "<li>Usuario: ".$array[0]."</li>";
                echo "<li>Email: ".$array[1]."</li>";
                
            }
            echo "</ul>";
        }
        
        fclose($archivo);
    }

    static function _loginUser($usuario, $filename){

        $archivo = fopen($filename,"r");
        $fila = 1;
        
        while (($datos = fgetcsv($archivo, 1000, "|")) !== FALSE) {
            $numero = count($datos);
            $fila++;
            

            for ($c=0; $c < $numero; $c++) {
                
                $array = explode(",",$datos[$c]);

               /*  echo "<li>Usuario: ".$array[0]."</li>";
                echo "<li>Email: ".$array[1]."</li>"; */
                /* var_dump($usuario);
                var_dump($datos[$c]); */

                if (strpos($datos[$c], $usuario->_email) === false) {
                    echo"El usuario no existe";
                }
                elseif ((strpos($datos[$c], $usuario->_email) !== false) && (strpos($datos[$c], $usuario->_password) !== false)) {

                    echo"verificado";
                    
                }
                else{
                    echo"Datos incorrectos";
                }
                
            }
            
        }
        
        fclose($archivo);
    }
}
