<?php
require_once 'models/Categoria.php';
require_once 'helpers/utils.php';

class CategoriaController {

    public function index() {
        Util::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        
        require_once 'views/categoria/index.php';
    }

    public function crear() {
        Util::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function save() {

        Util::isAdmin();

        if(isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;

            if($nombre) {
                $categoria = new Categoria();
                $categoria->setNombre($nombre);

                $save = $categoria->save();

                if($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";  
        }
        header("Location:".BASE_URL.'Categoria/crear');
    }
}