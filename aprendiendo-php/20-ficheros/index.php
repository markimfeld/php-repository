<?php
/*
//abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido.'<br />';
}

//Escribir en un archivo
fwrite($archivo, "***Soy un texto metido desde php***");

//cerrar archivo
fclose($archivo);
*/

//copiar
//copy("fichero_texto.txt", "fichero_copiado.txt") or die("Error al copiar");

//renombrar fichero
//rename("fichero_copiado.txt", "archivito_recopiadito.txt");

//Eliminar
//unlink('fichero_texto.txt') or die('Error al borrar');

//Comprobar si existe o no
if(file_exists("fichero_texto.txt")){
    echo "El archivo existe!";
}else{
    echo "No existe!";
}

?>