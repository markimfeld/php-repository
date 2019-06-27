<?php

class Producto {

    private $id;
    private $categoriaId;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setCategoriaId($categoriaId) {
        $this->categoriaId = $categoriaId;
    }

    public function getCategoriaId() {
        return $this->categoriaId;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }
    
    public function setStock($stock) {
        $this->stock = $stock;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getAll() {
        $sql = "SELECT * FROM producto ORDER BY id DESC";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getAllCategory($id) {
        $sql = "SELECT p.* FROM producto p INNER JOIN categoria c ON p.categoria_id = c.id WHERE c.id = $id";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getRandom($limit) {
        $sql = "SELECT * FROM producto ORDER BY RAND() LIMIT $limit";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getOne() {
        $sql = "SELECT * FROM producto WHERE id = {$this->getId()}";
        $producto = $this->db->query($sql);
        return $producto->fetch_object();
    }

    public function save() {
        $sql = "INSERT INTO producto VALUES(NULL, {$this->getCategoriaId()},'{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, NULL, CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($sql);
        return $save ? true : false;
    }

    public function edit() {
        $sql = "UPDATE producto SET categoria_id = {$this->getCategoriaId()}, nombre = '{$this->getNombre()}', descripcion = '{$this->getDescripcion()}', precio = {$this->getPrecio()}, stock = {$this->getStock()}";  
        if(!empty($this->getImagen())) {
            $sql .= ", imagen = '{$this->getImagen()}'";
        }
        $sql .= " WHERE id = {$this->getId()}";
        $save = $this->db->query($sql);
        return $save ? true : false;
    }   

    public function delete() {
        $sql = "DELETE FROM producto WHERE id = {$this->getId()}";
        $delete = $this->db->query($sql);
        return $delete ? true : false;
    }
}


?>