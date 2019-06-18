<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 9</title>
    </head>
    <body>

        <?php
        $filas = 3;
        $columnas = 5;



        echo "<form action=\"$action_page\" method=\"GET\">";
        for($i = 0; $i < $filas; $i++) {
            for($j = 0; $j < $columnas; $j++) {
                echo "<input type=\"number\" name=\"$i$j\">";
            }
            echo "<br/>";
        }
        echo "<input type=\"submit\" value=\"Mostrar\">";
        echo '<hr />';

        echo '<h4>Imprimiendo todos los elementos tomandolos como filas</h4>';
        for($i = 0; $i < $filas; $i++) {
            for($j = 0; $j < $columnas; $j++) {
                if(isset($_GET["$i$j"]) && !empty($_GET["$i$j"])) {
                    echo $_GET["$i$j"]." ";
                }
            }
        }

        echo '<h4>Imprimiendo todos los elementos tomandolos como columnas</h4>';
        for($j = 0; $j < $columnas; $j++) {
            for($i = 0; $i < $filas; $i++) {
                if(isset($_GET["$i$j"]) && !empty($_GET["$i$j"])) {
                    echo $_GET["$i$j"]."<br/>";
                }
            }
        }

        ?>
    </body>
</html>
