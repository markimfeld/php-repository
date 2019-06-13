<?php


class NotaController {

    public function listar(){
        // Modelo
        require_once 'models/nota.php';
        // Logica de la accion del controlador
        $nota = new Nota();
        $nota->setNombre("Hello");
        $nota->setContenido("Hello world with MVC");

        // Vista
        require_once 'views/nota/listar.php';
    }

    public function crear() {

    }

    public function borrar() {

    }

}