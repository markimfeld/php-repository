<h1>Carrito de la Compra</h1>

<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>

    <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Eliminar</th>
        </tr>
        <?php 
            foreach($carrito as $index => $elemento): 
            $producto = $elemento['producto'];
        ?>
        <tr>
            <td>
                <?php if($producto->imagen != null):?>
                    <img src="<?=BASE_URL?>uploads/images/<?= $producto->imagen?>" alt="producto" class="img-carrito">
                <?php else: ?>
                    <img src="<?=BASE_URL?>assets/img/camiseta.png" alt="producto" class="img-carrito">
                <?php endif; ?>
            </td>
            <td><a href="<?=BASE_URL?>Producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a></td>
            <td><?=$producto->precio?></td>
            <td>
                <?=$elemento['unidades']?>
                <div class="updown-unidades">
                    <a href="<?=BASE_URL?>Carrito/up&index=<?=$index?>" class="button">+</a>
                    <a href="<?=BASE_URL?>Carrito/down&index=<?=$index?>" class="button">-</a>
                </div>
            </td>
            <td><a href="<?=BASE_URL?>Carrito/delete&index=<?=$index?>" class="button button-danger">Quitar Producto</a></td>
        </tr>
        <?php endforeach;?>
    </table>
    <div class="delete-carrito">
        <a href="<?=BASE_URL?>Carrito/delete_all" class="button button-delete button-danger">Vaciar Carrito</a>
    </div>
    <div class="total-carrito">
        <?php $stats = Util::statsCarrito(); ?>
        <h3>Precio Total: $ <?=$stats['total']?></h3>
        <a href="<?=BASE_URL?>Pedido/hacer" class="button button-pedido">Hacer pedido</a>
    </div>
<?php else:?>
    <p>El carrito está vació, añade un producto.</p>
<?php endif; ?>