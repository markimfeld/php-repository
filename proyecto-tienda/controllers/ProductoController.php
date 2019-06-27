<?php

require_once 'models/producto.php';

class ProductoController {

    public function index() {
        $producto = new Producto();
        $productos = $producto->getRandom(6);
        // renderizar vista        
        require_once 'views/producto/destacado.php';
    }

    public function ver() {
        $id = isset($_GET['id']) ? $_GET['id'] : false;

        if($id) {
            $producto = new Producto();
            $producto->setId($id);
            $pro = $producto->getOne();
        }
        require_once 'views/producto/ver.php';
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

                if(isset($_FILES['imagen'])){
                    $file = $_FILES['imagen'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];

                    if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {
                        
                        if(!is_dir('uploads/images/')) {
                            mkdir('uploads/images/', 0777, true);
                        }
                        $producto->setImagen($filename);
                        move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);   
                    }
                }
                if(isset($_GET['id'])) {
                    $producto->setId($_GET['id']);
                    $save = $producto->edit();
                } else {
                    $save = $producto->save();
                }
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

    public function editar() {
        Util::isAdmin();
        
        $id = isset($_GET['id']) ? $_GET['id'] : false;

        if($id) {
            $editar = true;
            $producto = new Producto();
            $producto->setId($id);
            $pro = $producto->getOne();

            require_once 'views/producto/crear.php';
        } else {
            header("Location:".BASE_URL.'Producto/gestion');
        }
    }

    public function eliminar() {
        Util::isAdmin();

        $id = isset($_GET['id']) ? $_GET['id'] : false;

        if($id) {
            $producto = new Producto();
            $producto->setId($id);
            $delete = $producto->delete($id);


            if($delete) {
                $_SESSION['register'] = "complete";
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }
        header("Location:".BASE_URL.'Producto/gestion');
    }
}   

?>