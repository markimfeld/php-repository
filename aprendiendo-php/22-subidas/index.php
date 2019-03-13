<!DOCTYPE HTML>
<head lang="es">
    <meta charset="utf-8" />
    <title>Subir archivos PHP</title>
    
    <body>
        <h1>Subir archivos con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" />
            <input type="submit" value="Enviar" />
        </form>
        
        <h1>Listado de imagenes</h1>
        <?php
            //abre el directorio
            $gestor = opendir('./images');
            if($gestor):
                //recorremos el directorio
                while(($image = readdir($gestor)) !== false):
                    if($image != '.' && $image != '..'):
                        echo "<img src='images/$image' width='200px' /><br />"; 
                    endif;
                endwhile;
            endif;
        ?>
    </body>
</head>