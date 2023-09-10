<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/view/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/controller/cart.php"); ?>

<h2>корзина </h2>
<div class="cards">
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/controller/read.php");
    foreach ($products as $product) {
    ?>

        <div class="product-item">
            <img class="img" src="<?php echo $product["img"]; ?>">
            <div class="product-list">
                <h3><?php echo $product["title"]; ?></h3>
                <h3><?php echo $product["descr"]; ?></h3>
                <span class="price"><?php echo $product["price"]; ?></span>
                <a href="" class="button">В корзину</a>
                <a href="update.php?id=<?php echo $product["id"]; ?>" class="button-update">изменить</a>
                <a href="/controller/delete.php?id=<?php echo $product["id"]; ?>" class="button-delete">удалить</a>
            </div>
        </div>
    <?php }
    ?>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"); ?>