<h1>Detalle del Pedido</h1>

<?php if(isset($pedido)): ?>

    <?php if(isset($_SESSION['admin'])): ?>
        <h3>Cambiar estado del pedido</h3>
        <form action="<?=BASE_URL?>Pedido/estado" method="POST">
            <input type="hidden" value="<?= $pedido->id ?>" name="pedido_id" />
            <select name="estado">
                <option value="confirm" <?=$pedido->estado == "confirm" ? 'selected' : '' ?>>Pendiente</option>
                <option value="preparation"<?=$pedido->estado == "preparation" ? 'selected' : '' ?>>En preparación</option>
                <option value="ready"<?=$pedido->estado == "ready" ? 'selected' : '' ?>>Preparado para enviar</option>
                <option value="sended"<?=$pedido->estado == "sended" ? 'selected' : '' ?>>Enviado</option>
            </select>
            <input type="submit" value="Cambiar estado">
        </form>
        <br />
    <?php endif; ?>

    <h3>Dirección de envío</h3>
    Provincia: <?=$pedido->provincia?><br/>
    Ciudad: <?=$pedido->localidad?><br/>
    Dirección: <?=$pedido->direccion?><br/>
    
    <h3>Datos del Pedido:</h3>
    Estado: <?= Util::showStatus($pedido->estado) ?><br />
    Número de pedido: <?=$pedido->id?><br/>
    Total a pagar: $ <?=$pedido->coste?><br/>
    Productos:
    <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
        </tr>
    <?php while($producto = $productos->fetch_object()): ?>
        <tr>
            <td>
                <?php if($producto->imagen != null):?>
                    <img src="<?=BASE_URL?>uploads/images/<?= $producto->imagen?>" alt="producto" class="img-carrito">
                <?php else: ?>
                    <img src="<?=BASE_URL?>assets/img/camiseta.png" alt="producto" class="img-carrito">
                <?php endif; ?>
            </td>
            <td><?=$producto->nombre?></td>
            <td><?=$producto->precio?></td>
            <td><?=$producto->unidades?></td>
        </tr>
    <?php endwhile; ?>
    </table>
<?php endif; ?>