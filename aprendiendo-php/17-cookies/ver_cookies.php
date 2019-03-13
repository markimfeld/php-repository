<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
para mostrar el valor de las cookies debo usar $_COOKIE que es una variable
 * super global y es un array asociativo.
 *  */

if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
}else{
    echo 'No existe la cookie.';
}

if(isset($_COOKIE['unyear'])){
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
}else{
    echo 'No existe la cookie.';
}

?>
<a href="crear_cookie.php">Crear Cookies</a>
<a href="borrar_cookies.php">Borrar Cookies</a>