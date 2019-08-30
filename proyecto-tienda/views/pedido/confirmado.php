<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == "complete"): ?>
    <h1>Tu pedido se ha confirmado</h1>
    <p>
        Tu pedido ha sido guardado con exito, una vez que realices la transferencia
        bancaria a la cuenta 78965421313 con el coste del pedido, será procesado y enviado.
    </p>
    <br />
    <?php if(isset($pedido)): ?>
        <h3>Datos del Pedido:</h3>
        Número de pedido: <?=$pedido->id?><br/>
        Total a pagar: $ <?=$pedido->coste?><br/>
        Productos:
        <?php while($producto = $productos->fetch_object()): ?>
            <table>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Unidades</th>
                </tr>
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
            </table>
        <?php endwhile; ?>
    <?php endif; ?>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != "complete"): ?>
    <h1>Tu pedido no se ha podido procesar</h1>
<?php endif; ?>