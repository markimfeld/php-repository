<?php

//recoger por POST los datos que me llegan
//comprobar en general si existen datos por post
if (isset($_POST)) {
    //verifico que existan los datos de cada caja
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //array de errores
    $errores = array();

    //validar los datos antes de registrarlos en la base de datos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $errores['Apellidos'] = "El apellido no es válido";
    }
    //validar email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es válido";
    }


    //validar email
    if (!empty($password)) {
        $password = true;
    } else {
        $password_validado = false;
        $errores ['La contraseña'];
    }

    $guardar_usuario = false;
    if (count($errores) == 0) {
        $guardar_usuario = true;
    } else {
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
}
?>
