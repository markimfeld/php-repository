<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Universo Programación</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
            </p>    
            <p>
                <label for="apellido">Apellidos</label>
                <input type="text" name="apellido" />
            </p>
            
            <input type="submit" value="Enviar datos"/>
        </form>
    </body>
</html>