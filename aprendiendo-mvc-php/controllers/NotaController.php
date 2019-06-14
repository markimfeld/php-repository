<?php


class NotaController {

    public function listar(){
        // Modelo
        require_once 'models/Nota.php';
        // Logica de la accion del controlador
        $nota = new Nota();
        $notas = $nota->conseguirTodos('notas');

        // Vista
        require_once 'views/nota/listar.php';
    } 

    public function crear() {
        require_once 'models/Nota.php';
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nueva Nota");
        $nota->setDescripcion("Probando Nota");
        $guardar = $nota->guardar();

      
        header("Location: index.php?controller=Nota&action=listar");
    }

    public function borrar() {

    }

}