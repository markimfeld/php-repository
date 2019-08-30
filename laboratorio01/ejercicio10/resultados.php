<?php require_once 'cliente.php'; ?>
<?php require_once 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultados</title>
</head>

<?php 
    $cliente = new Cliente();
    $c = $cliente->getThreeFirst();
?>
<div id="result">
    <h1>Resultados</h1>
    <ul>
        <li><h3>Cliente de deuda mas alta: <?=$cliente->getFirst()->nombre?> - Deuda: $<?=$cliente->getFirst()->total_deuda?></h3></li>
        <li><h3>Cliente de deuda mas baja: <?=$cliente->getLast()->nombre?> - Deuda: $<?=$cliente->getLast()->total_deuda?></h3></li>
        <li><h3>Promedio de deuda: $<?= $cliente->getAverageDoubt(); ?></h3></li>
        <li><h3 style="text-align: center;">Los tres primeros deudores</h3></li>
        <?php for($i = 0; $i < count($c); $i++): ?>
            <li><h3 style="text-align: center;"><?=$i + 1?>.<?=$c[$i][1]?></h3></li>
        <?php endfor;?>
    </ul>
    <div id="btn-calcular">   
            <a href="index.php">Volver</a>  
    </div>
</div>


