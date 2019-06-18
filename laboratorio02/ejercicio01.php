<?php


class Empleado {
    private $nombre;
    private $sueldo;
    
    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function pagarImpuesto() {
        $info = "";
        if($this->sueldo > 30000) {
            $info .= '<h1>'.$this->getNombre().' debe pagar impuestos!</h1>';
        } else {
            $info .= '<h1>'.$this->getNombre().' no debe pagar impuestos!</h1>';
        }
        return $info;
    }
}

$empleado1 = new Empleado("Ramon", 35000);

echo $empleado1->pagarImpuesto();


?>