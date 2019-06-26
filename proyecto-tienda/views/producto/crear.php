<?php if(isset($editar) && isset($pro) && is_object($pro)): ?>
    <h1>Editar Producto <?=$pro->nombre?></h1>
    <?php $url_action = BASE_URL."Producto/editar&id=".$pro->id;?>
<?php else: ?>
    <h1>Crear Nuevos Productos</h1>
    <?php $url_action = BASE_URL."Producto/save";?>
<?php endif;?>


<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
    <strong class="alert-green" >Registro Completado Correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <strong class="alert-red" >Registro Fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Util::deleteSession('register');?>

<div class="form-container">

    <form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php isset($pro) && is_object($pro) ? $pro->nombre : ""; ?>" />

        <label for="descripcion">Descripcion</label>
        <textarea type="text" name="descripcion"></textarea>

        <label for="precio">Precio</label>
        <input type="text" name="precio" value="<?php $pro->precio;?>"/>

        <label for="stock">Stock</label>
        <input type="number" name="stock"/>

        <label for="categoria">Categoria</label>
        <?php $categorias = Util::showCategorias();?>
        <select name="categoria">
            <?php while($cat = $categorias->fetch_object()): ?>
                <option value="<?=$cat->id;?>">
                    <?= $cat->nombre; ?>
                </option>
            <?php endwhile;?>
        </select>

        <label for="imagen">Imagen</label>
        <input type="file" name="imagen"/>
        <input type="submit" value="Guardar" /> 

    </form>
</div>