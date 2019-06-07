<?php


class Empleado {
    private $nombre;
    private $sueldo;
    
    function Empleado($_nombre, $_sueldo) {
        $this->setNombre($_nombre);
        $this->setSueldo($_sueldo);
    }

    public function setNombre($_nombre) {
        $this->$nombre = $_nombre;
    }

    public function setSueldo($_sueldo) {
        $this->$sueldo = $_sueldo;
    }

    public function getNombre() {
        return $this->$nombre;
    }

    public function pagarImpuesto() {
        $info = "";
        if($this->$sueldo > 30000) {
            $info .= '<h1>'.$this->getNombre().' debe pagar impuestos!</h1>';
        } else {
            $info .= '<h1>'.$this->getNombre().' no debe pagar impuestos!</h1>';
        }
        return $info;
    }
}

$empleado1 = new Empleado("Ramon", 20);
$empleado2 = new Empleado("Luis", 33000);

echo $empleado1->pagarImpuesto();
echo $empleado2->pagarImpuesto();


?>