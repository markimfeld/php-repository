<?php if(isset($gestion)): ?>
    <h1>Gestionar Pedidos</h1>
<?php else: ?>
    <h1>Mis pedidos</h1>
<?php endif; ?>



<table>
    <tr>
        <th>Nro Pedido</th>
        <th>Coste</th>
        <th>Fecha</th>
        <th>Estado</th>
    </tr>
    <?php while($pedido = $pedidos->fetch_object()): ?>
        <tr>
            <td><a href="<?=BASE_URL?>Pedido/detalle&id=<?= $pedido->id ?>"><?= $pedido->id ?></a></td>
            <td>$ <?= $pedido->coste?></td>
            <td><?= $pedido->fecha?></td>
            <td><?= Util::showStatus($pedido->estado) ?></td>
        </tr>
    <?php endwhile; ?>
</table>