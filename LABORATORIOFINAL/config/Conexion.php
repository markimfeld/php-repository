<?php

require_once "global.php";
//Establecemos los parametros necesarios
//para la conexión al servidor

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//consulta a cotejamiento
mysqli_query( $conexion, 'SET NAMES "'.DB_ENCODE.'"');

//si tenemos un posible error en la conexion lo mostramos
//devuelve el código de error de la ultima llamada

if(mysqli_connect_errno()) {
    printf("Falló la conexión a DB:%s\n", mysqli_connect_errno());
} 


if(!function_exists('ejecutarConsulta')) {

    function ejecutarConsulta($sql) {
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    function ejecutarConsultaSimpleFila($sql) {
        global $conexion;
        $query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;
    }

    function ejecutarConsulta_retornarID($sql) {
        global $conexion;
        $query = $conexion->query($sql);
        return $conexion->insert_id;
    }

    function limpiarCadena($str) {
        global $conexion;
        $str = mysqli_real_escape_string($conexion, trim($str));
        return htmlspecialchars($str);
    }
}

?>