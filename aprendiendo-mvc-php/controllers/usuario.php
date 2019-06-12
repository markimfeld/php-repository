<?php


class UsuarioController {

    public function mostrarTodos() {
        require_once ('models/usuario.php'); 

        $usuario = new Usuario();
        $todos_los_usuarios = $usuario->conseguirTodos();
        require_once ('views/usuarios/mostrar-todos.php');
    }

    public function crear() {

    }

}