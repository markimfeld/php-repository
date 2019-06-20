<h1>Guardar Categoria</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
    <strong class="alert-green" >Registro Completado Correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <strong class="alert-red" >Registro Fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Util::deleteSession('register');?>

<form action="<?=BASE_URL?>Categoria/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>
    <a href="<?=BASE_URL?>Categoria/index" class="button btn-volver">
        Volver
    </a>
    <input type="submit" value="Guardar">
</form>

