<?php

require_once '../vendor/autoload.php';

//conexion
$conexion = new mysqli("localhost", "root", "admin", "notas_master");
$conexion->query("SET NAMES 'utf8'");

//consulta para contar elementos totales
// $consulta = $conexion->query("SELECT * FROM notas");
// $numero_elementos = $consulta->num_rows;
// más eficiente
$consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");
$numero_elementos = $consulta->fetch_object()->total;
$numeros_de_elementos_pagina = 2;

//Hacer paginacion
$pagintation = new Zebra_Pagination();
//numero total de elementos a paginar
$pagintation->records($numero_elementos);

//numero de elementos por pagina
$pagintation->records_per_page($numeros_de_elementos_pagina);

$page = $pagintation->get_page();

$empieza_aqui = (($page - 1) * $numeros_de_elementos_pagina);
$sql = "SELECT * FROM notas LIMIT $empieza_aqui, $numeros_de_elementos_pagina";   
$notas = $conexion->query($sql);


echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while($nota = $notas->fetch_object()) {
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3><hr />";
}

$pagintation->render();