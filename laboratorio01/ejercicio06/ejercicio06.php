<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 6</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <h1>Ejercicio 6</h1>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>

<?php
$datos = array();

$cantidad = 10;

if (isset($_POST['submit'])) {

    for ($i = 0; $i < $cantidad; $i++) {

        $datos[$i] = array("Numero" => $_POST["numero$i"]);
    }
    $sum = 0;
    foreach ($datos as $dato) {
        echo "Numero: " . $dato["Numero"];
        echo "<br>";
        $sum += $dato["Numero"];
    }
    echo 'SUMATORIA: ' . $sum;
} else {

    echo "<form action=\"$action_page\" method=\"post\">";

    for ($i = 0; $i < $cantidad; $i++) {
        echo "Numeros $i: ";
        echo "<input type=\"text\" name=\"numero$i\" value=\"\"]><br>";
    }

    echo "<input class=\"waves-effect waves-light btn\" type=\"submit\" name=\"submit\" value=\"Enviar\">";

    echo "</form>";
}
?>