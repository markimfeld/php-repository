<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$peliculas = array('Batman','Spiderman','Flash', 'Arrow');
$numeros = array(8,3,1,2,7,4,-5,3,6);


$peliculas[] = 'Avangers';


unset($peliculas[2]);

var_dump($peliculas);


echo '<hr />';

$fans = array('marcos', 'gonza', 'fede', 'layla', 'mati');

$ganador = array_rand($fans);

var_dump($fans[$ganador]);

var_dump($fans);
$res = array_search('feede', $fans);
var_dump($res);


var_dump(count($fans));

echo sizeof($fans);

?>
