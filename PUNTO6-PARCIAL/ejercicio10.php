<html>

<head>
    <title>Punto 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="text-align:center;">Atletas</h1>
    <form style="text-align:center;" action="ejercicio10.php" method="POST">
        <input type="text" name="atletas[]">
        <?php 
        if (isset($_POST["atletas"])){
            $atletas=$_POST["atletas"];
        }
        else{
            $atletas=[];
        }
        if (isset($_POST["nota"])){
            $nota=$_POST["nota"];
        }
        else{
            $nota=[[]];
        }

        foreach ($atletas as $atleta) {
            echo "<input type='hidden' name='atletas[]' value='$atleta'>";
        }
        ?>
        <input type="submit" value="Añadir" <?php 
        if(count($atletas) == '10'){ ?> disabled <?php   } ?>>
    </form>
    <br>
    <form style="text-align:center;" action="ejercicio10.php" method="POST">
        
        <table>
            <tr>
            <th>Atleta</th>
            <?php 
                foreach ($atletas as $atleta) {
                    echo "<input type='hidden' name='atletas[]' value='$atleta'>";
                }
                echo "<th>Tiempo</th>";
            ?>
            </tr>
            <?php 

            $j=0;
            foreach ($atletas as $atleta) {
                echo "<tr><th>$atleta</th>";
                
                for ($i=0; $i < 1; $i++) { 
                    //$value = (int)$nota[$j][$i];
                    echo "<td><input type='number' name='nota[$j][]' value='0' ></td>";
                }
                $j++;
                echo "</tr>";
            }
            ?>
        </table>
        <input style="padding:10px; margin:10px;" type="submit" value="Calcular">
    </form>
    
    <table class="resultados">
        <?php 
        $n_atletas=count($atletas);
        
        if (isset($_POST["atletas"]))
            if (isset($_POST["nota"]))
                if (!empty($_POST)){
                        echo "<h2>Datos cargados:</h2>";
                        for ($atleta=0; $atleta < $n_atletas; $atleta++) {
                            echo "<tr>";
                            for ($materia=0; $materia < 10; $materia++) { 
                                echo "<td>";
                                echo $_POST["nota"][$atleta][$materia];
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                     }
        echo "</table>";
        echo "<br>";
        ?>

    <table class="resultados">
    <?php 
        $n_atletas=count($atletas);
        echo "<tr>";
        
        if (isset($_POST["atletas"]))
            if (isset($_POST["nota"])){
                $k=1;
                for ($materia=0; $materia < 10; $materia++) {
                    $mayor=0;
                    for ($atleta=0; $atleta < $n_atletas; $atleta++) { 
                        if (isset($nota[$atleta][$materia]))
                            if ($nota[$atleta][$materia]>$mayor) {
                                $mayor=$nota[$atleta][$materia];
                        }
                    }
                    echo "<td>Mayor nota materia $k: $mayor";
                    $k++;
                }
                }
        echo "</tr>";
        echo "<tr>";
        
        if (isset($_POST["atletas"]))
            if (isset($_POST["nota"])){
                $k=1;
                for ($materia=0; $materia < 10; $materia++) {
                    $menor=999999999;
                    for ($atleta=0; $atleta < $n_atletas; $atleta++) {
                        if (isset($nota[$atleta][$materia])) 
                            if ($nota[$atleta][$materia]<$menor) {
                                $menor=$nota[$atleta][$materia];
                        }
                    }
                    echo "<td>Menor nota materia $k: $menor";
                    $k++;
                }
            }
        echo "</tr>";
        echo "<tr>";
        
        if (isset($_POST["atletas"]))
            if (isset($_POST["nota"]))
                for ($atleta=0; $atleta < $n_atletas; $atleta++) {
                    $mayor=0;
                    for ($materia=0; $materia < 10; $materia++) {
                        if (isset($nota[$atleta][$materia]))
                            if ($nota[$atleta][$materia]>$mayor) {
                                $mayor=$nota[$atleta][$materia];
                            }
                    }
                    echo "<td>Mayor nota alumno $atletas[$atleta]: $mayor";
                }
        echo "</tr>";
        echo "<tr>";
        
        if (isset($_POST["atletas"]))
            if (isset($_POST["nota"]))
                for ($atleta=0; $atleta < $n_atletas; $atleta++) {
                    $menor=999999999;
                    for ($materia=0; $materia < 10; $materia++) {
                        if (isset($nota[$atleta][$materia]))
                            if ($nota[$atleta][$materia]<$menor) {
                                $menor=$nota[$atleta][$materia];
                            }
                    }
                    echo "<td>Menor nota alumno $atletas[$atleta]: $menor";
                }
        echo "</tr>";
        echo "<tr>";
        
        if (isset($_POST["atletas"]))
            if (isset($_POST["nota"]))
                for ($atleta=0; $atleta < $n_atletas; $atleta++) {
                    $total=0;
                    for ($materia=0; $materia < 10; $materia++) {
                        $total+=$nota[$atleta][$materia];
                    }
                    $promedio=$total/10;
                    echo "<td>Promedio alumno $atletas[$atleta]: $promedio";
                }
        echo "</tr>";
        echo "<tr>";
        
        if (isset($_POST["atletas"]))
            if (isset($_POST["nota"])){
                $k=1;
                for ($materia=0; $materia < 10; $materia++) {
                    $total=0;
                    for ($atleta=0; $atleta < $n_atletas; $atleta++) {
                        if (isset($nota[$atleta][$materia]))
                            $total+=$nota[$atleta][$materia];
                    }
                    if ($n_atletas!=0) {
                        $promedio=$total/$n_atletas;
                        echo "<td>Promedio materia $k: $promedio";
                        $k++;
                    }
                }
            }
        echo "</tr>";
        echo "</table>";
    ?>
</body>

</html>