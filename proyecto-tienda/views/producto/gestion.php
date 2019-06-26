<h1>Gestión de Productos</h1>

<a href="<?=BASE_URL?>Producto/crear" class="button button-small">
    Crear Producto
</a>


<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>PRECIO</th>
        <th>STOCK</th>  
        <th>ACCIONES</th>
    </tr>
    <?php while($pro = $productos->fetch_object()): ?>
        <tr>
            <td><?= $pro->id; ?></td>
            <td><?= $pro->nombre; ?></td>
            <td><?= $pro->descripcion; ?></td>
            <td><?= $pro->precio; ?></td>
            <td><?= $pro->stock; ?></td>
            <td>
                <a href="<?=BASE_URL?>Producto/editar&id=<?=$pro->id?>" class="button button-danger btn-edit">Editar</a>
                <a href="<?=BASE_URL?>Producto/eliminar&id=<?=$pro->id?>" class="button button-danger">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>