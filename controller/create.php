<?php
//  error_reporting(0);
//view 'admin.php'

require_once($_SERVER['DOCUMENT_ROOT'] . "/model/db.php");
$title = $_POST['title'];
$descr = $_POST['descr'];
$price = $_POST['price'];
$img = $_POST['img'];


$sql = "INSERT INTO products (title, descr, price, img) values ('$title' ,'$descr', $price, '$img')";

if ($mysqli->query($sql) === TRUE) {
    echo "таблица добавлена";
} else {
    echo "Error: " . $mysqli->error;
}
