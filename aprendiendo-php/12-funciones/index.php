<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function calculadora($numero1, $numero2){

    $suma           = $numero1 + $numero2;
    $resta          = $numero1 - $numero2;
    $division       = $numero1 / $numero2;
    $multiplicacion = $numero1 * $numero2;
    
    $cadena_texto = "";
    
    $cadena_texto .= "Suma:  $suma <br /> ";
    $cadena_texto .= "Resta:  $resta <br /> ";
    $cadena_texto .= "Multiplicacion:  $multiplicacion <br /> ";
    $cadena_texto .= "Division:  $division <br /> ";
    
    return $cadena_texto;
}

echo calculadora(10, 50);

?>
