<?php
$resultado = false;
if(isset($_POST['n1']) && isset($_POST['n2'])){
    
    
    if(isset($_POST['sumar'])){
        $resultado = ($_POST['n1'] + $_POST['n2']);
    }
    if(isset($_POST['restar'])){
        $resultado = ($_POST['n1'] - $_POST['n2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = ($_POST['n1'] * $_POST['n2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = ($_POST['n1'] / $_POST['n2']);
    }
}

?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Calculadora</title>
    </head>
    <body>
        <form action="" method="POST">
            <p>
            <label for="n1">Numero 1:</label>
            <input type="number" name="n1" />   
            <label for="n2">Numero 2:</label>
            <input type="number" name="n2" />   
            </p>
            <input type="submit" value="Sumar" name="sumar"/>   
            <input type="submit" value="Restar" name="restar"/>   
            <input type="submit" value="Multiplicar" name="multiplicar"/>   
            <input type="submit" value="Dividir" name="dividir"/>
            
            <?php
                if($resultado):
                    echo "<h2>El resultado es $resultado</h2>";
                endif;
            ?>
                
        </form>
    </body>
</html>