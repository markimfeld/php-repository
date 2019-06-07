<?php

class Menu {
    private $enlaces = array();
    private $titulos = array();
    
    function cargarOpcion($enlaces, $titulos) {
        $this->enlaces[] = $enlaces;
        $this->titulos[] = $titulos;
    }
    
    function mostrarHorizontal() {
        for ($i = 0; $i < count($this->enlaces); $i++) {
            echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a> ';
        }
    }
    
    function mostrarVertical() {
        for ($i = 0; $i < count($this->enlaces); $i++) {
            echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a><br/>';
        }
    }
}

$menu = new Menu();
$menu->cargarOpcion("https://www.google.com", "Google");
$menu->cargarOpcion("https://www.youtube.com", "Youtube");

$menu->mostrarHorizontal();
// $menu->mostrarVertical();

?>

