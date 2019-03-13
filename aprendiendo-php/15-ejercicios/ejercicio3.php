<?php

/* 
 * Ejercicio 3: programa que compruebe si una variable está vacía, y si está
 * vacía rellernala con texto en minusculas y mostrarla en mayusculas y en negrita.
 */


$variable = "";

if(!empty($variable)){
    echo 'no esta vacía';
}else{
    $variable = "marcos sebastian imfeld";
    echo '<strong>'.strtoupper($variable).'</strong>';
}
?>
