<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$coleccion = array();
$numero = (int) 5;
$string = (string) 'string';
$booleano = (boolean) true;


function verify($var){
    if(is_string($var)){
        echo '<h1> String </h1>';
    }else if(is_int($var)){
        echo '<h1> Int </h1>';
    }else if(is_bool($var)){
        echo '<h1> Bool </h1>';
    }else if(is_array($var)){
        echo '<h1> Colección </h1>';
    }
}

verify($booleano);    
    
?>