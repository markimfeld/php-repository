<?php if(isset($_SESSION['identity'])):?>
    <h1>Hacer Pedido</h1>
    <p>
        <a href="<?=BASE_URL?>Carrito/index">Ver los productos y el precio del pedido</a>
    </p>
    <br />
    <h3>Dirección para el envío:</h3>
    <form action="<?=BASE_URL.'Pedido/add'?>" method="post">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" placeholder="Provincia" required>
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" placeholder="Localidad" required>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" placeholder="Dirección" required>

        <input type="submit" value="Confirmar pedido">
    </form>

<?php else: ?>
    <h1>Necesitas estar identificado</h1>
    <p>Necesitas estar logueado en la web para poder realizar tu pedido.</p>
<?php endif; ?>