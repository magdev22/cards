<?php 

$mysqli = new Mysqli();
$mysqli->connect("db","cards","cards", "cards");


if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>