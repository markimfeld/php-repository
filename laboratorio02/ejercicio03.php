<?php

class CabeceraPagina {

    private $titulo;

    function CabeceraPagina() {

    }

    public function setTitulo($_titulo) {
        $this->$titulo = $_titulo;
    }

    public function getTitulo() {
        return $this->$titulo;
    }

    public function setAlignTitle($opcion) {
        switch($opcion) {
            case 1: {
                return '<div style="text-align: left;">'.$this->getTitulo().'</div>';
                break;
            }
            case 2: {
                return '<div style="text-align: right;">'.$this->getTitulo().'</div>';
                break;
            }
            case 3: {
                return '<div style="text-align: center;">'.$this->getTitulo().'</div>';
                break;
            }
        }
    }

    public function setBackground($color) {
        echo '<body style="background-color: '.$color.';"></body>';
    }

    public function setFont($font) {
        echo '<body style="font-family: '.$font.';"></body>';
    }

}


$cabecera1 = new CabeceraPagina();
$cabecera1->setTitulo("PHP 7");
$cabecera1->setBackground("palegreen");
$cabecera1->setFont("Roboto");
echo $cabecera1->setAlignTitle(3);
?>