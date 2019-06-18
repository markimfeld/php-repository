<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Te vendo mi Ropa</title>
    </head>
    <body>
        <div class='titulo' style="color: #2979CD; text-align: center;">
            <h1>Te Vendo Mi Ropa</h1> <hr />
        </div>
        <form action="" method="GET" enctype="multipart/form-data">
            
            <label for="nombre">Nombre:</label> 
            <p><input type="text" name="nombre" placeholder="Nombre"/></p>
            <label for="apellido">Apellido:</label> 
            <p><input type="text" name="apellido" placeholder="Apellido"/></p>
            <label for="dni">Dni:</label> 
            <p><input type="number" name="dni" placeholder="DNI"/></p>
            <label for="email">Email:</label> 
            <p><input type="email" name="email" placeholder="Email"/></p>
            <label for="precio">Monto Total de la Compra:</label> 
            <p><input type="number" name="montototal" /></p>
            <p><input type="submit" value="Comprar">
        </form>
        <?php

            if(isset($_GET['montototal']) && !empty($_GET['montototal'])) {

                // Datos del cliente
                $nombre = $_GET['nombre'];
                $apellido = $_GET['apellido'];
                $dni = $_GET['dni'];
                $email = $_GET['email'];

                echo "Nombre: $nombre <br/> Apellido: $apellido <br/>";
                echo "Dni: $dni <br/>";
                echo "Email: $email <br/>";

                $total_compra = $_GET['montototal'];
                if ($total_compra < 300) {
                    echo '<h3 style="color: black;">Gracias por su compra, debe abonar $120 de gastos por envío.</h3>';
                } else if ($total_compra > 300 && $total_compra < 700) {
                    $importe_faltante = 700 - $total_compra;
                    echo '<h2 style="color: red;">Con solo $' . $importe_faltante . ' más podrás tener gastos de envío gratis.</h2>';
                } else {
                    echo '<h1 style="color: green;">Envío gratis</h1>';
                }
            }
        ?>
    </body>
</html>
