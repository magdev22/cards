<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php");

use Model\ConnectDb;

if(isset($_POST['title']) && !empty($_POST['title'])){

require_once($_SERVER['DOCUMENT_ROOT'] . "/model/ConnectDb.php");

$connect = (new ConnectDb)->getConnection();

$sql = "INSERT INTO products (title, descr, price, img) VALUES (?, ?, ?, ?)";

$stmt= $connect->prepare($sql);

$parameters =[
$_POST["title"],
$_POST["descr"],
$_POST["price"],
$_POST["img"],
];

$stmt->bind_param("ssis", ...$parameters);
$stmt->execute();
echo "строка добавлена";

}