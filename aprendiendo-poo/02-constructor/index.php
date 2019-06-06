<?php

require_once ('coche.php');

$coche = new Coche();
$coche->setMarca("Ferrari");
$coche->setColor("Rojo");
$coche->setRuedas(5);
$coche->setVelocidad(300);



echo $coche->mostrarInfo($coche);