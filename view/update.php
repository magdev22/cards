<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/header.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/controller/update.php");?>

    <h1>    Update товара </h1>

  



<center>
    <a href="/index.php" class="floating-button">HOME</a>
</center>
<center>
    <?php
    foreach($products as $product){
    ?>
    <form action="" method="post" name="form">

        <input name="title" type="text" placeholder="названиее" value="<?php echo $product['title'] ?>" />
        <br>
        <!-- Поле ввода почты  -->
        <input name="descr" type="text" placeholder="описание" value="<?php echo $product['descr'] ?>" />
        <br>
        <!-- Поле ввода для темы сообщения -->
        <input  name="price" type="namber" placeholder="цена" value="<?php echo $product['price'] ?>" />
        <br>
        <input  name="img" type="text" placeholder="картинка" value="<?php echo $product['img'] ?>" />
        <br>
        <!-- Кнопка с надписью «Отправить», которая запускает обработчик формы -->
        <input type="submit" value="Отправить" />
    </form>
    <?php } ?>  
</center>





<h1>оценка</h1>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/footer.php");?>
