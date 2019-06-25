<?php

require_once 'models/producto.php';

class ProductoController {

    public function index() {
        // renderizar vista
        require_once 'views/producto/destacado.php';
    }

    public function gestion() {
        Util::isAdmin();
        
        $producto = new Producto();

        $productos = $producto->getAll();

        require_once 'views/producto/gestion.php';
        
    }

    public function crear() {
        Util::isAdmin();

        require_once 'views/producto/crear.php';
    }

    public function save() {
        Util::isAdmin();

        if(isset($_POST)) {
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;

            if($categoria && $nombre && $descripcion && $precio && $stock) {
                $producto = new Producto();
                $producto->setCategoriaId($categoria);
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);    

                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {

                    if(!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                    }

                    move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                    $producto->setImagen($filename);
                }
                $save = $producto->save();
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
        header("Location:".BASE_URL.'Producto/crear');
    }
}   

?>