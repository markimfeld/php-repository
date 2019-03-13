<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$frase = "Hello world!";

function globales(){
    global $frase;
    return $frase;
}

echo globales();

?>
