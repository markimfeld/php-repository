<?php


class Coche {

    private $color;
    private $marca;
    private $velocidad;
    private $ruedas;


    public function __construct() {

    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function setRuedas($ruedas) {
        $this->ruedas = $ruedas;
    }

    public function getRuedas() {
        return $this->ruedas;
    }


    public function mostrarInfo(Coche $coche) {
        if(is_object($coche)) {
            $info = "<h1>Información del Coche</h1><br />";
            $info .= "Marca: ".$coche->getMarca()."<br />";
            $info .= "Color: ".$coche->getColor()."<br />";
            $info .= "Velocidad: ".$coche->getVelocidad()."<br />";
            $info .= "Ruedas: ".$coche->getRuedas();
        } else {
            $info .= "Tu dato es: ".$coche;
        }
        return $info;
    }
}