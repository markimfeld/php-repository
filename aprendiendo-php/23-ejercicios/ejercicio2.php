<?php

/*
 *  1. Una función.
 *  2. Validar un email con filter_var
 *  3. Recoger una variable por get y validarla
 *  4. Mostrar el resultado.
 */

function is_email($email){
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

if(isset($_GET['email'])){
    if(is_email($_GET['email'])){
        echo '<h1>Perfecto!</h1>';
    }else{
        echo '<h1>Todo mal!</h1>';
    }
}else{
    echo '<h1>Pasa por get un email</h1>';
}

?>