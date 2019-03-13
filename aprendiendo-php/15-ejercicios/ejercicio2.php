<?php

/* 
Escribir un programa con php que añada valores a un array mientras que su logintud
 * sea menor que 120. MOstrar en pantalla.
 */

$numeros = array();

for($i = 0; $i < 120; $i++){
    array_push($numeros, $i);
}
$contar = 0;

foreach ($numeros as $numero){
    if($contar == 5){
        echo '<br />';
    }else{
        echo $numero . ' ';
    }
    if($contar == 5){
        $contar = 0;
    }else{
        $contar++;
    }
    
}
?>