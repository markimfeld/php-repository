<?php

/* 
Cookie: ficherito  que se almacena en el ordenador del usuario que visita
la web con el fin de recordar datos o rastrear cierta información o comportamiento
del mismo en la web.
 */

//para crear cookies

//setcookie("nombre", "Valor que solo puede ser texto", caducidad, ruta, dominio);

//cookie básica.
setcookie("micookie", "Valor de mi cookie");


//cookie con expiración
setcookie("unyear", "valor de mi cookie de 365 días", time() + (60*60*24*365));



?>

<a href="ver_cookies.php">Ver cookies</a>