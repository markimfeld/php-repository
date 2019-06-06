<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Listado de notas</h1>
    <ul>
        <?php
        $nota=array("iaw"=>9,"ABD"=>10,"ASO"=>9,
            "SAD"=>9,"EIE"=>10,"SRI"=>9);
        $acu=0;
        foreach($nota as $asignatura=>$n){
            echo"<li><strong>$asignatura</strong> ".
                " $n</li>";
            $acu+=$n;
        }
        ?>
    </ul>

<?php
echo "<p><strong>Nota media:</strong>".
    ($acu/count($nota))."</p>";
?>
</body>
</html>