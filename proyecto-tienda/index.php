<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Tienda Route Passe</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    </head>
    <body>
        <div id="container">
            <!-- cabecera -->
            <header id="header">    
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="Camiseta Logo"/>
                    <a href="index.php">
                        Route Passe
                    </a>
                </div>
            </header>
            <!-- menu -->
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Categoria 1</a></li>
                    <li><a href="#">Categoria 2</a></li>
                    <li><a href="#">Categoria 3</a></li>
                    <li><a href="#">Categoria 4</a></li>
                    <li><a href="#">Categoria 5</a></li>
                    <li><a href="#">Contactos</a></li>
                </ul>
            </nav>
            <div id="content">
                <!-- barra lateral -->
                <aside id="sidebar">
                    <div id="login" class="block-aside">
                        <form action="#" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email"/>
                            <label for="password">Contraseña</label>
                            <input type="password" name="password"/>
                            <input type="submit" value="Enviar" />
                        </form>
                        <a href="#">Mis pedidos</a>
                        <a href="#">Gestionar pedidos</a>
                        <a href="#">Gestionar categorias</a>
                    </div>
                </aside>
                <!-- contenido central -->
                <div id="central">
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="Producto">
                        <h2>Camiseta Azul Ancha<h2>
                        <p>30 Dolares</p>
                        <a href="">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="Producto">
                        <h2>Camiseta Azul Ancha<h2>
                        <p>30 Dolares</p>
                        <a href="">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="Producto">
                        <h2>Camiseta Azul Ancha<h2>
                        <p>30 Dolares</p>
                        <a href="">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="Producto">
                        <h2>Camiseta Azul Ancha<h2>
                        <p>30 Dolares</p>
                        <a href="">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="Producto">
                        <h2>Camiseta Azul Ancha<h2>
                        <p>30 Dolares</p>
                        <a href="">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="Producto">
                        <h2>Camiseta Azul Ancha<h2>
                        <p>30 Dolares</p>
                        <a href="">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- pie de pagina -->
            <footer>
                <p>Desarrolado por Marcos Imfeld &copy; <?= date('Y');?></p>
            </footer>
        </div>
    </body>
</html>