

<h1>Algunos de nuestros Productos</h1>

<?php while($pro = $productos->fetch_object()): ?>
    <div class="product">
        <a href="<?=BASE_URL?>Producto/ver&id=<?=$pro->id?>">
            <img src="<?= BASE_URL?>uploads/images/<?=$pro->imagen?>" alt="Imagen Difusor">
            <h2><?=$pro->nombre?><h2>
        </a>
        <p><?=$pro->precio?></p>
        <a href="<?=BASE_URL?>Carrito/add&id=<?=$pro->id?>" class="button">Comprar</a>
    </div>
<?php endwhile; ?>
