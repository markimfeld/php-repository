<?php

if(!is_dir("micarpeta")){
    mkdir('micarpeta', 0777) or die('No se puede crear la carpeta!');
}else{
    echo 'ya existe la carpeta!';
}

//rmdir('micarpeta');

echo '<hr />'.'<h1>Contenido de la carpeta</h1>';
if($gestor = opendir('./micarpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo.'<br />';
        }
    }
}