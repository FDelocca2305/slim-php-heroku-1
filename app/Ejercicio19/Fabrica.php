<?php 
include_once "Operario.php";

class Fabrica{
    
    private $_cantMaxOperarios = 5;
    private $_operarios = array();
    private $_razonSocial;

    public function __construct(string $rs)
    {
        $this->_razonSocial = $rs;
    }

    private function retornarCostos(){
        $costos = 0;
        
        foreach($this->_operarios as $operario){
            $costos += $operario->GetSalario();
        }

        return $costos;
    }

    public function MostrarOperarios(){
        foreach($this->_operarios as $operario){
            echo($operario::Mostrar());
        }
    }

    static function MostrarCostos(Fabrica $fb){
        return "Costos: ".$fb->retornarCostos();
    }

    /* public function Equals(Fabrica $fb, Operario $op){

    } */

    public function Add(Operario $op){
        if (array_push($this->_operarios, $op)) {
            return TRUE;
        }else{
            return FALSE;
        }
    }









}

?>