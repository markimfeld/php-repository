<?php


class Util {

    public static function deleteSession($name) {
        if(isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }


    public static function isAdmin() {
        if(!isset($_SESSION['admin'])) {
            header("Location:".BASE_URL);
        } {
            return true;
        }
    }

    public static function showCategorias() {
        require_once 'models/Categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias; 
    }
}