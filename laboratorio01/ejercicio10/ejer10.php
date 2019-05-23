<?php
$datos = array(array());

$alumnos = 2;
$materias = 2;

if (isset($_POST['submit'])) {

    for ($i = 0; $i < $alumnos; $i++) {
        for ($n=0; $n < $materias; $n++) { 
            $datos[$i][$n] = array("Alumno" => $_POST["materia$i"]);
        }
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

    for ($i = 1; $i <= $alumnos; $i++) {
        echo "Alumno $i: <br>";
        for ($n=1; $n <= $materias; $n++) { 
            echo "- Materia $n: <input type=\"number\" name=\"materia$i\" value=\"\"]><br>";
        } 
    }
    echo "<input type=\"text\" placeholder=\"Ingresa una Materia\"><br>";
    echo "<input type=\"submit\" name=\"submit\" value=\"Cargar datos\">";
    echo "</form>";
}
?>