<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>

<body>
    <style>
        body {
            /*text-align: center;*/
            margin: 10;
            font-family: Verdana, Arial, sans-serif;
            font-size: 16px;
        }

        /* Настраиваем внешний вид полей ввода*/
        input {
            display: inline-block;
            margin: 10px auto;
            border: 2px solid #eee;
            padding: 10px 20px;
            font-family: Verdana, Arial, sans-serif;
            font-size: 16px;
        }

        textarea {
            display: inline-block;
            margin: 10px auto;
            border: 2px solid #eee;
            padding: 10px 20px;
            font-family: Verdana, Arial, sans-serif;
            font-size: 16px;
        }
    </style>
    <h1>    Update товара </h1>

    <button><a href="/index.php">home</a></button>

<?php
//  error_reporting(0);
    include('./db.php');

    $title = $_POST ['title'];
    $descr = $_POST ['descr'];
    $price = $_POST ['price'];
    $img = $_POST ['img'];


$sql = "UPDATE products SET `title`='$title',`descr`='$descr',`price`='$price', `img`='$img' WHERE `id`=".$_GET['id']   ;  ;

if ($mysqli->query($sql) === TRUE) {
    echo "inserted successfully";
} else {
    echo "Error: " . $mysqli->error;
}
    
include('db.php');
$sql = "SELECT * FROM products WHERE id=".$_GET['id'];
$products = $mysqli->query($sql);

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
    
 <?php }
?>
    ?>

<?php  

?>
</body>

</html>


