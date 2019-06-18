

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ingrese ciudades:</h1>
</body>
</html>

<?php

    $ciudad = array();
    $cantidad = $_POST['cantidad'];
    if(isset($_POST['btn2'])){
        for($i = 0; $i < $cantidad; $i++) {
            $ciudad[$i] = $_POST["ciudad$i"];
            echo 'Ciudad: '.$ciudad[$i].'<br />';
        }
    }  else {
        echo "<form action=\"$action_page\" method=\"post\">";
        echo "Ingresa la cantidad de ciudades: <input type=\"number\" name=\"cantidad\">";
        echo "<input type=\"submit\" name=\"btn1\" value=\"Aceptar\"><br />";
        for($i = 0; $i < $cantidad; $i++) {
            echo "Ciudad: <input type=\"text\" name=\"ciudad$i\">".'<br />';
        }
        echo "<input type=\"submit\" name=\"btn2\" value=\"Mostrar\" >";
        echo '</form>';
    }
?>