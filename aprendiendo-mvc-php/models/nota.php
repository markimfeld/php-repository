<?php

class Nota {
    private $nota;
    private $contenido;


    public function setNota($nota) {
        $this->nota = $nota;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    public function getContenido() {
        return $this->contenido;
    }
}