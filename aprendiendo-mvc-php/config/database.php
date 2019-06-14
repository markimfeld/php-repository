<?php


class DataBase {


    public static function conectar() {
        $conexion = new mysqli("localhost", "root", "admin", "notas_master");
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}


?>