<?php

//iniciar la sesión y la conexión a bd
require_once 'includes/conexion.php';
// recoger datos del formulario
if (isset($_POST)) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta para comprobar las credenciales del usuarios
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        
        //comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);
        
        if($verify) {
            // utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;
            if(isset($_SESSION['error_login'])) {
                session_unset($_SESSION['error_login']);
            }
        } else {
            // si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "Login incorrecto!";
        }
    }else  {
        $_SESSION['error_login'] = "Login Incorrecto!";
    }
}
// redirigir al index.php
header('Location: index.php');