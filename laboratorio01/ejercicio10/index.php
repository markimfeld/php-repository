<?php require_once 'db.php'; ?>
<?php require_once 'cliente.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Recuperatorio</title>
</head>
<body>
    <div id="container">
        <header>
            <div id="logo">
                <img src="images/logo.png" alt="Logo Uncaus">
            </div>
            <h1>Recuperatorio</h1>
        </header>
        <form action="index.php" method="POST">
            <div class="datos">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Ingrese el nombre">

                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" placeholder="Ingrese el apellido">

                <label for="deuda">Total Deuda</label>
                <input type="number" name="deuda" placeholder="Ingrese deuda total">
                
                <input type="submit" value="Ingresar">
            </div>
            <?php
                $save = false;
                if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['deuda'])) {
                    
                    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
                    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';  
                    $deuda = isset($_POST['deuda']) ? $_POST['deuda'] : '';

                    $cliente = new Cliente();
                    if($cliente->getCount() < 10) {
                        $cliente->setNombre($nombre);
                        $cliente->setApellido($apellido);
                        $cliente->setTotalDeuda($deuda);
                        $save = $cliente->save();
                    }else {
                        echo "<h3 style=\"text-align: center; color: green; margin-bottom: 20px;\">Ya hay diez clientes</h3>";    
                    }
                }

                if($save) {
                    echo "<h3 style=\"text-align: center; color: green; margin-bottom: 20px;\">Agregado Correctamente</h3>";
                } else {
                    echo "<h3 style=\"text-align: center; color: #555; margin-bottom: 20px;\">Ingresa los datos</h3>";
                }
            ?>
            <table>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Deuta Total</th>
                <?php $cliente = new Cliente(); ?>
                <?php $clientes = $cliente->getAll();?>
                <?php while($cliente = $clientes->fetch_object()): ?>
                    <tr>
                        <td><?= $cliente->id?></td>
                        <td><?= $cliente->nombre ?></td>
                        <td><?= $cliente->apellido ?></td>
                        <td><?= $cliente->total_deuda ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </form>

        <div id="btn-calcular">   
            <a href="resultados.php">Calcular</a>  
        </div>
       
        <div class="fantasma"></div>
        <footer id="footer">
            <p>Recuperatorio de Marcos Imfeld &copy; <?= date('Y');?></p>
        </footer>
    </div>
    
</body>
</html>
