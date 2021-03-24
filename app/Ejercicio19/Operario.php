<?php

class Operario{
    
    private $_apellido;
    private $_legajo;
    private $_nombre;
    private $_salario;

    public function __construct(int $legajo, string $apellido, string $nombre, float $salario){
        
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_legajo = $legajo;
        $this->_salario = $salario;

    }

    public function setAumentarSalario($porcentaje){
        $this->_salario = (($this->_salario * $porcentaje) / 100) + $this->_salario;
    }

    public function GetSalario(){
        return $this->_salario;
    }

    public function GetNombreApellido(){
        return $this->_nombre.", ".$this->_apellido;
    }

    public function Mostrar(){
        return $this->GetNombreApellido()." Legajo:".$this->_legajo." Salario: ".$this->GetSalario();
    }

    static function MostrarStatic(Operario $op){
        return $op->Mostrar();
    }

    public function Equals(Operario $op1, Operario $op2){
        if ($op1->GetNombreApellido() == $op2->GetNombreApellido() && $op1->_legajo == $op2->_legajo) {
            return true;
        }else{
            return false;
        }
    }

} 

?>