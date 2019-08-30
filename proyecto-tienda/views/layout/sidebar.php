                
                <!-- barra lateral -->
                <aside id="sidebar">
                    <div id="carrito" class="block-aside">
                        <h3>Mi carrito</h3>
                        <ul>
                        <?php $stats = Util::statsCarrito(); ?>
                            <li><a href="<?=BASE_URL?>Carrito/index">Producto (<?=$stats['count']?>)</a></li>
                            <li><a href="<?=BASE_URL?>Carrito/index">Total: $<?=$stats['total']?></a></li>
                            <li><a href="<?=BASE_URL?>Carrito/index">Ver el carrito</a></li>
                        </ul>
                    </div>

                    <div id="login" class="block-aside">
                        <?php if(!isset($_SESSION['identity'])): ?>
                            <h3>Entrar a la web</h3>
                            <form action="<?=BASE_URL?>Usuario/login" method="POST">
                                <label for="email">Email</label>
                                <input type="email" name="email"/>
                                <label for="password">Contraseña</label>
                                <input type="password" name="password"/>
                                <input type="submit" value="Ingresar" />
                            </form>
                        <?php else: ?>
                            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
                        <?php endif; ?>
                        
                        <ul>
                            <?php if(isset($_SESSION['admin'])):?>
                                <li><a href="<?=BASE_URL?>Categoria/index">Gestionar categorias</a></li>
                                <li><a href="<?=BASE_URL?>Producto/gestion">Gestionar productos</a></li>
                                <li><a href="<?=BASE_URL?>Pedido/gestionar_pedidos&id<?=$_SESSION['identity']->id?>">Gestionar pedidos</a></li>
                            <?php endif; ?>
                            <?php if(isset($_SESSION['identity'])): ?>
                                <?php if(!isset($_SESSION['admin'])): ?>
                                    <li><a href="<?=BASE_URL?>Pedido/mis_pedidos?>">Mis pedidos</a></li>
                                <?php endif; ?>
                                <li><a href="<?=BASE_URL?>Usuario/logout">Cerrar Sesión</a></li>
                            <?php else: ?>
                                <li><a href="<?=BASE_URL?>Usuario/register">Registrarse</a></li>
                            <?php endif; ?>
                        </ul>
                        
                    </div>
                </aside>
                <!-- contenido central -->
                <div id="central">
