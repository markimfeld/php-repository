<?php

class Persona {

    private $nombre;
    private $fechaNac;
    private $sexo;


    public function __construct($nombre, $fechaNac, $sexo) {
        $this->nombre = $nombre;
        $this->fechaNac = $fechaNac;
        $this->sexo = $sexo;
    }

    public function toString() {
        $info = "";
        $info .= $this->nombre . '<br />';
        $info .= $this->fechaNac . '<br />';
        $info .= $this->sexo . '<br />';
        return $info;
    }
}


class Informatico extends Persona {

    public function soyInformatico() {
        $msg = '';
        $msg .= "Soy Informatico";
        return $msg;
    }
}

class Matematico extends Persona {

    private $experienciaMatematica;

    public function __construct() {
        parent::__construct($nombre, $fechaNac, $sexo);
        $this->experienciaMatematica = 5;
    }

    public function soyMatematico() {
        $msg = '';
        $msg .= "Soy Matematico";
        return $msg;
    }
}

?>