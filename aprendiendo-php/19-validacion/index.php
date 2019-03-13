<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Validación Formulario</title>
    </head>
    <body>
        <h1>Validar Formularios en PHP</h1>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_valores'){
                    echo '<strong style="color:red">Introduce todos los datos en'
                    . 'todos los campos del formulario</strong>';
                }
                if($error == 'nombre'){
                    echo '<strong style="color:red">Introduce bien el nombre</strong>';
                }
                if($error == 'apellido'){
                    echo '<strong style="color:red">Introduce bien el apellido</strong>';
                }
                if($error == 'edad'){
                    echo '<strong style="color:red">Introduce bien la edad</strong>';
                }
                if($error == 'email'){
                    echo '<strong style="color:red">Introduce bien el email</strong>';
                }
                if($error == 'pass'){
                    echo '<strong style="color:red">Introduce una contraseña de mas de 5 caracteres</strong>';
                }
            }
        ?>
        <form method="POST" action="procesar_formulario.php">
            <label for="nombre">Nombre</label><br /> 
            <input type="text" name="nombre" required="required" pattern="[a-zA-Z]+" /><br />
            
            <label for="apellido">Apellido</label><br /> 
            <input type="text" name="apellido" required="required" pattern="[a-zA-Z]+" /><br />
            
            <label for="edad">Edad</label><br /> 
            <input type="number" name="edad" required="required" pattern="[0-9]+"/><br />
            
            <label for="email">Email</label><br /> 
            <input type="email" name="email" required="required" /><br />
            
            <label for="pass">Contraseña</label><br /> 
            <input type="password" name="pass" required="required" minlength="5" /><br />
            
            <input type="submit" value="Enviar" required="required" /><br />
        </form>
    </body>
</html>