<?php

class Pedido {

    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setUsuarioId($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function setProvincia($provincia) {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function setLocalidad($localidad) {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    public function getLocalidad() {
        return $this->localidad;
    }

    public function setDireccion($direccion) {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setCoste($coste) {
        $this->coste = $coste;
    }

    public function getCoste() {
        return $this->coste;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getAll() {
        $sql = "SELECT * FROM pedido ORDER BY id DESC";
        $pedidos = $this->db->query($sql);
        return $pedidos;
    }

    public function getOne() {
        $sql = "SELECT * FROM pedido WHERE id = {$this->getId()}";
        $pedido = $this->db->query($sql);
        return $pedido->fetch_object();
    }

    public function getOneByUser() {
        $sql = "SELECT p.id, p.coste FROM pedido p WHERE p.usuario_id = {$this->getUsuarioId()} ORDER BY id DESC LIMIT 1";
        $pedido = $this->db->query($sql);

        return $pedido->fetch_object();
    }

    public function getAllByUser() {
        $sql = "SELECT p.* FROM pedido p WHERE p.usuario_id = {$this->getUsuarioId()} ORDER BY id DESC";
        $pedido = $this->db->query($sql);

        return $pedido;
    }

    public function getProductosByPedido($id) {
        // $sql = "SELECT * FROM producto WHERE id IN (SELECT producto_id FROM linea_pedido WHERE pedido_id = {$id})";
        
        $sql = "SELECT pr.*, lp.unidades FROM producto pr INNER JOIN linea_pedido lp ON pr.id = lp.producto_id WHERE lp.pedido_id = {$id}";

        $productos = $this->db->query($sql);

        return $productos;
    }

    public function save() {
        $sql = "INSERT INTO pedido VALUES(NULL, {$this->getUsuarioId()},'{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirm', CURDATE(), CURTIME());";
        $save = $this->db->query($sql);
        return $save ? true : false;
    }

    public function save_linea() {
        $sql = "SELECT LAST_INSERT_ID() as 'pedido';";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;
        
        foreach($_SESSION['carrito'] as $elemento) {
            $producto = $elemento['producto'];
            $insert = "INSERT INTO linea_pedido VALUES(NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']});";
            $save = $this->db->query($insert); 
        }

        return $save ? true : false;
    }

    public function updateOne() {
        $sql = "UPDATE pedido SET estado='{$this->getEstado()}' WHERE id={$this->getId()};";

        $update = $this->db->query($sql);

        return $update ? true : false;
    }
}


?>