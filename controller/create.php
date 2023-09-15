<?php
if(isset($_POST['title']) && !empty($_POST['title'])){

require_once($_SERVER['DOCUMENT_ROOT'] . "/model/db.php");

$sql = "INSERT INTO products (title, descr, price, img) VALUES (?, ?, ?, ?)";
$stmt= $mysqli->prepare($sql);

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