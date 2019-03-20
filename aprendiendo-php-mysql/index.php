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
    //var_dump($nota).'<br />';
    echo "<h2>".$nota['titulo']."</h2>";
    echo $nota['descripcion'].'<br />';
}

//INSERTAR DATOS EN LA BASE DE DATOS
$insert = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$query = mysqli_query($conexion, $insert);

echo '<br />';
if($insert) {
    echo "DATOS INSERTADOS CORRECTAMENTE";
} else {
    echo "DATOS NO INSERTADOS";
}

?>