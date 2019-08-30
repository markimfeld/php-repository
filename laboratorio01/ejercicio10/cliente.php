<?php


class Cliente {

    private $id;
    private $nombre;
    private $apellido;
    private $total_deuda;
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

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setTotalDeuda($total_deuda) {
        $this->total_deuda = $total_deuda;
    }

    public function getTotalDeuda() {
        return $this->total_deuda;
    }

    public function save() {
        $sql = "INSERT INTO cliente VALUES(NULL, '{$this->getNombre()}', '{$this->getApellido()}', {$this->getTotalDeuda()})";

        $save = $this->db->query($sql);
        
        $result = false;
        if($save) {
            $result = true;
        }

        return $result;
    }

    public function getAll() {
        $sql = "SELECT * FROM cliente ORDER BY total_deuda ASC";
        $atletas = $this->db->query($sql);
        return $atletas;
    }

    public function getOne() {
        $sql = "SELECT * FROM cliente WHERE id = {$this->getId()}";
        $cliente = $this->db->query($sql);
        return $cliente->fetch_object();
    }

    public function getCount() {
        $sql = "SELECT COUNT(id) FROM cliente";
        $cliente = $this->db->query($sql);
        $row = mysqli_fetch_assoc($cliente);

        return $row['COUNT(id)'];
    }

    public function getFirst() {
        $sql = "SELECT * FROM cliente ORDER BY total_deuda DESC LIMIT 1";
        $cliente = $this->db->query($sql);
        return $cliente->fetch_object();
    }

    public function getLast() {
        $sql = "SELECT * FROM cliente ORDER BY total_deuda ASC LIMIT 1";
        $cliente = $this->db->query($sql);
        return $cliente->fetch_object();
    }

    public function getThreeFirst() {
        $sql = "SELECT * FROM cliente ORDER BY total_deuda DESC LIMIT 3";
        $cliente = $this->db->query($sql);
        return $cliente->fetch_all();
    }

    public function getAverageDoubt() {
        $sql = "SELECT AVG(total_deuda) FROM cliente";
        $avg = $this->db->query($sql);
        
        $row = mysqli_fetch_assoc($avg);

        return $row['AVG(total_deuda)'];
    }
}