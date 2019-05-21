<?php


class Empleado {
    private $nombre;
    private $sueldo;
    
    function inicializar($nombre, $sueldo){
        $this->$nombre = $nombre;
        $this->$sueldo = $sueldo;
    }
    
    function pagarImpuesto() {
        if($this->sueldo > 30000) {
            echo '<h1>'.$this->nombre.' debe pagar impuestos!</h1>';
        } else {
            echo '<h1>'.$this->nombre.' no debe pagar impuestos!</h1>';
        }
    }
}

$empleado1 = new Empleado();
$empleado1->inicializar('Luis', 35000);
$empleado1->pagarImpuesto();


?>