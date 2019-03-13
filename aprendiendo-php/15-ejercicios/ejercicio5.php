<?php

/* 
Crear un array con el contenido de la tabla:
ACCION      AVENTURA        DEPORTES
GTA         ASSASINS        FIFA 19
COD         CRASH           PES 19
PUGB        PRINCE          MOTO GP 19

Cada columna debe ir en un fichero separado(include).
 *  */

$tabla = array(
    "ACCION" => array('GTA V', 'Call of Duty', 'PUGB'),
    "AVENTURA" => array('Asssasins Cred', 'Crash', 'Prince of Persia'),
    "DEPORTE" => array('Fifa 19', 'Pes 19', 'Moto GP 19')
);

$categorias = array_keys($tabla);

?>

<table border="1">
    <?= require_once 'includes/encabezado.php' ?>;
    <?= require_once 'includes/primera.php' ?>;
    <?= require_once 'includes/segunda.php' ?>;
    <?= require_once 'includes/tercera.php' ?>;
</table>







