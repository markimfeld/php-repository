<?php require_once 'conexion.php'; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    </head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">
                    Blod de Videojuegos
                </a>
            </div>
            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php">Categoria 1</a></li>
                    <li><a href="index.php">Categoria 2</a></li>
                    <li><a href="index.php">Categoria 3</a></li>
                    <li><a href="index.php">Categoria 4</a></li>
                    <li><a href="index.php">Sobre nosotros</a></li>
                    <li><a href="index.php">Contacto</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <div id="contenedor">