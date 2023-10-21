<?php
//  error_reporting(0);
//view 'update.php'


require_once($_SERVER['DOCUMENT_ROOT'] . "/model/ConnectDb.php");
$title = $_POST['title'];
$descr = $_POST['descr'];
$price = $_POST['price'];
$img = $_POST['img'];


$sql = "UPDATE products SET `title`='$title',`descr`='$descr',`price`='$price', `img`='$img' WHERE `id`=" . $_GET['id'];;

if ($mysqli->query($sql) === TRUE) {
    echo "inserted successfully";
} else {
    echo "Error: " . $mysqli->error;
}

include('ConnectDb.php');
$sql = "SELECT * FROM products WHERE id=" . $_GET['id'];
$products = $mysqli->query($sql);
