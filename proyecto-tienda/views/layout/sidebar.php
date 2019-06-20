                
                <!-- barra lateral -->
                <aside id="sidebar">
                    <div id="login" class="block-aside">
                        <?php if(!isset($_SESSION['identity'])): ?>
                            <h3>Entrar a la web</h3>
                            <form action="<?=BASE_URL?>Usuario/login" method="POST">
                                <label for="email">Email</label>
                                <input type="email" name="email"/>
                                <label for="password">Contraseña</label>
                                <input type="password" name="password"/>
                                <input type="submit" value="Enviar" />
                            </form>
                        <?php else: ?>
                            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
                        <?php endif; ?>
                        
                        <ul>
                            <?php if(isset($_SESSION['admin'])):?>
                                <li><a href="<?=BASE_URL?>Categoria/index">Gestionar categorias</a></li>
                                <li><a href="#">Gestionar productos</a></li>
                                <li><a href="#">Gestionar pedidos</a></li>
                            <?php endif; ?>
                            <?php if(isset($_SESSION['identity'])): ?>
                                <?php if(!isset($_SESSION['admin'])): ?>
                                    <li><a href="#">Mis pedidos</a></li>
                                <?php endif; ?>
                                <li><a href="<?=BASE_URL?>Usuario/logout">Cerrar Sesión</a></li>
                            <?php endif; ?>
                        </ul>
                        
                    </div>
                </aside>
                <!-- contenido central -->
                <div id="central">
