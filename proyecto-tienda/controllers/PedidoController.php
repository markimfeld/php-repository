<?php
require_once 'helpers/utils.php';
require_once 'models/Pedido.php';

class PedidoController {

    public function hacer() {
        require_once 'views/pedido/hacer.php';
    }

    public function add() {
        if(isset($_SESSION['identity'])) {
            $usuario_id = $_SESSION['identity']->id;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $stats = Util::statsCarrito(); 
            $coste = $stats['total'];

            if($provincia && $localidad && $direccion) {
                // Guardar datos
                $pedido = new Pedido();
                $pedido->setUsuarioId($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);

                $save = $pedido->save();
                // Guardar linea_pedido
                $save_linea = $pedido->save_linea();

                if($save && $save_linea) {
                    $_SESSION['pedido'] = "complete";
                } else {
                    $_SESSION['pedido'] = "failed";
                }

                header("Location:".BASE_URL."Pedido/confirmado");

            } else {
                $_SESSION['pedido'] = "failed";
            }

        } else {
            // Redirigir
            header("Location:".BASE_URL);
        }
    }

    public function confirmado() {
        if(isset($_SESSION['identity'])) {
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuarioId($identity->id);
            $pedido = $pedido->getOneByUser();

            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($pedido->id);
        }
        require_once 'views/pedido/confirmado.php';
    }

    public function mis_pedidos() {
        Util::isIdentity();

        $usuario_id = $_SESSION['identity']->id;

        $pedido = new Pedido();
        //sacar los pedidos del usuario
        $pedido->setUsuarioId($usuario_id);
        $pedidos = $pedido->getAllByUser();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle() {
        Util::isIdentity();

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            // sacar el pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();
            // sacar los productos
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($id);

            require_once 'views/pedido/detalle.php';
        } else {
            header("Location:".BASE_URL."pedido/mis_pedidos");
        }
    }

    public function gestionar_pedidos() {
        Util::isAdmin();

        $gestion = true;

        $pedido = new Pedido();

        $pedidos = $pedido->getAll();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function estado() {
        Util::isAdmin();

        if(!empty(isset($_POST['pedido_id'])) && isset($_POST['estado'])) {
            $pedido_id = $_POST['pedido_id'];
            $estado = $_POST['estado'];
            $pedido = new Pedido();
            $pedido->setId($pedido_id);
            $pedido->setEstado($estado);
            $pedido->updateOne();
            
            header("Location:".BASE_URL."Pedido/detalle&id=".$pedido_id);
        }else {
            header("Location:".BASE_URL);
        }
    }
}