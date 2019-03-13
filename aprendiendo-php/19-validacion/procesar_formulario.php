<?php
$error = 'faltan_valores';
if(!empty($_POST['nombre']) && !empty($_POST['apellido'])
        && !empty($_POST['edad']) && !empty($_POST['email'])
        && !empty($_POST['pass'])){
    $error = 'ok';
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    
    //validar el nombre
    if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $error = 'nombre';
    }
    //validar apellido
    if(!is_string($apellido) || preg_match("/[0-9]/", $apellido)){
        $error = 'apellido';
    }
    //validar edad
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    //validar email
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    //valida password
    if(empty($pass) || strlen($pass) < 5){
        $error = 'pass';
    }
    //var_dump($_POST);
    //var_dump($error);
    //die();
}else{
    $error = 'faltan_valores';
}

if($error != 'ok'){
    //redirección
    header("Location:index.php?error=$error");
}

?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Validación Formulario</title>
    </head>
    <body>
        <?php if($error == 'ok'): ?>
        <h1>Datos validados correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <?php endif; ?>
    </body>
</html>