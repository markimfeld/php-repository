

<h1>Algunos de nuestros Productos</h1>

<?php while($pro = $productos->fetch_object()): ?>
    <div class="product">
        <img src="<?= BASE_URL?>uploads/images/<?=$pro->imagen?>" alt="Imagen Difusor">
        <h2><?=$pro->nombre?><h2>
        <p><?=$pro->precio?></p>
        <a href="" class="button">Comprar</a>
    </div>
<?php endwhile; ?>
