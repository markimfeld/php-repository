<?php $nombre = 'Marcos Imfeld'; ?>
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
            <!-- SIDEBAR -->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="text" name="email" />

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />

                        <input type="submit" value="Entrar" />
                    </form>
                </div>
                <div id="registro" class="bloque">
                    <h3>Registrate</h3>
                    <form action="register.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" />

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" />

                        <label for="email">Email</label>
                        <input type="text" name="email" />

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />

                        <input type="submit" value="Registrar" />
                    </form>
                </div>
            </aside>
            <!-- CAJA PRINCIPAL -->
            <div id="principal">
                <h1>Ultimas entradas</h1>
                <article class="entrada">
                    <a href="#">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dictum, 
                            sed suspendisse risus odio integer gravida fusce libero, vivamus mattis facilisi nam erat lectus faucibus.  
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="#">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dictum, 
                            sed suspendisse risus odio integer gravida fusce libero, vivamus mattis facilisi nam erat lectus faucibus. 
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="#">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dictum, 
                            sed suspendisse risus odio integer gravida fusce libero, vivamus mattis facilisi nam erat lectus faucibus.   
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="#">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dictum, 
                            sed suspendisse risus odio integer gravida fusce libero, vivamus mattis facilisi nam erat lectus faucibus. 
                        </p>
                    </a>
                </article>
                <div id="ver-todas">
                    <a href="">Ver todas las entradas</a>
                </div>
            </div><!-- FIN PRINCIPAL -->
            <div class="clearfix"></div>
        </div>
        <!-- FOOTER -->
        <footer id="pie">
            Todos los derechos reservados &copy; <?= $nombre . ' -' ?> <?= date('Y') ?>
        </footer>
    </body>
</html>



