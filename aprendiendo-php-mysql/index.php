<?php

$conexion = mysqli_connect("localhost", "root", "admin", "phpmysql");

// comprobar si la conexión es correcta 

if(mysqli_connect_errno()) {
    echo 'La conexión a la base de datos mysql ha fallado'. mysqli_connect_error();
} else {
    echo 'Conexión Exitosa!';
}

echo '<br />';

//consulta para configurar la codificación de caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");

//consulta select
$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)) {
    var_dump($nota).'<br />';
}

?>