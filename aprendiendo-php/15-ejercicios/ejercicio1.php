<?php

/* 
 * Ejercicio 1: hacer un programa en PHP que tenga un array con 8 numeros enteros
 * y que haga lo siguiente:
 *  - Recorrerlo y mostrarlo.
 *  - Ordenarlo y mostrarlo.
 *  - Mostrar su longitud.
 *  - Buscar un elemento.
 */

$numeros = array(5,7,3,55,-1,8,-50,-6);

function show($numbers){
    echo '<ol>';
    foreach ($numbers as $numer) {
        echo '<li>'.$numer.'</li>';
    }
    echo '</ol>';
}
show($numeros);
sort($numeros);
show($numeros);
echo count($numeros);
echo '<br />';  
var_dump(array_search(90, $numeros));

?>