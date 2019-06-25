<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL?>assets/css/style.css"/>
    </head>
    <body>
        <!-- Inicio container -->
        <div id="container">
            <!-- cabecera -->
            <header id="header">    
                <div id="logo">
                    <img src="<?= BASE_URL?>assets/img/camiseta.png" alt="Camiseta Logo"/>
                    <a href="index.php">
                        Tienda de Camisetas
                    </a>
                </div>
            </header>
            <!-- menu -->
            <?php $categorias = Util::showCategorias(); ?>
            <nav id="menu">
                <ul>
                    <li><a href="<?=BASE_URL?>">Inicio</a></li>
                    <?php while($cat = $categorias->fetch_object()): ?>
                        <li><a href="#"><?= $cat->nombre; ?></a></li>
                    <?php endwhile; ?>
                    <li><a href="<?=BASE_URL?>Contacto/index">Contactos</a></li>
                </ul>
            </nav>
            <div id="content">