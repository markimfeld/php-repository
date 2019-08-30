<?php if(isset($pro)): ?>
<h1><?=$pro->nombre;?></h1>
<div id="product-detail">
    <div class="image">
        <img src="<?= BASE_URL?>uploads/images/<?=$pro->imagen?>" alt="Imagen Difusor">
    </div>
    <div class="data">
        <p class="descripcion"><?=$pro->descripcion?></p>
        <p class="price">$ <?=$pro->precio?></p>
        <a href="<?=BASE_URL?>Carrito/add&id=<?=$pro->id?>" class="button">Comprar</a>
    </div>
</div>
<?php else: ?>
<h1>El producto no existe</h1>
<?php endif; ?>


