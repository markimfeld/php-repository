<?php

include ('ModeloBase.php');

class Usuario extends ModeloBase {
    private $nombre;
    private $apellidos;
    private $email;
    private $password;

    public function __construct() {
        parent::__construct();
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    
}