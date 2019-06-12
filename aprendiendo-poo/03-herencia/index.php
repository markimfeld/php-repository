<?php

require_once ('clases.php');

$informatico = new Informatico('Seba', '25101995', 'Hombre');
$persona = new Persona('Matias', '02061994', 'Hombre');
$matematico = new Matematico('Marcos', '25101995', 'Hombre');


echo $matematico->toString();
echo $matematico->soyMatematico();
echo '<hr />';
echo $informatico->toString();
echo $informatico->soyInformatico();    
echo '<hr />';
echo $persona->toString();
echo $persona->soyInformatico();



?>