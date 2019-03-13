<?php

$archivo = $_FILES['archivo'];

$nombre = $archivo['name'];

$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" 
        || $tipo == "image/png" || $tipo == "image/gif"){
    //compruebo que no exista ya el directorio 
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
    //mover el archivo que se encuentra temporalmente subido a la carpeta que 
    //yo quiera.
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    header("Refresh: 5; URL=index.php");
    echo '<h1>Imagen subida correctamente</h1>';
    
}else{
    //me sirve para redireccionar, cuando pasa 5 seg lo mando a una pagina
    //que yuo quiero por ejemplo index.php
    header("Refresh: 5; URL=index.php");
    echo '<h1>Sube una imagen con un formato correcto, por favor...</h1>';
}

?>
