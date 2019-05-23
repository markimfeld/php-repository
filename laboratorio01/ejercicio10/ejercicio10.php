<?php
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="main-container">
        <h1>Lista de Alumnos</h1>
        <form action="operaciones.php" method="post">
            <section class="section">
                <?php
                    for ($n=1; $n <= 2; $n++) {
                        echo '<div class="alumno">'; 
                            echo '<h4>'."Alumno $n".':</h4>';
                            for ($i=1; $i <= 2; $i++) { 
                                echo '<label for=\"\">'."Materia $i".': </label>';
                                echo '<input type="number"'."name=nota$i".' value="$valor"><br>';
                            }
                        echo '</div>';
                    }
                    echo '<input type="text" name="nombreAlum" placeholder="Ingrese un Alumno" value="" <br>';
                    echo '<input type="text" name="nombreMate" placeholder="Ingrese una Materia" value="" <br>';
                    echo '<input type="submit" value="Nota Mas alta"';
                    // echo '<h3>Calculos: </h3><br>';
                    // echo '<label>'."Punto 1: ".'</label>';
                    // echo '<input type="text" placeholder="Ingresa una materia" value="">';
                    // echo '<input type="submit" value="Calcular Mayor Nota de una Materia"><br>';
                ?>
            </section>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>




