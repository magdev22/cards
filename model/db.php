<?php 
 error_reporting(0);

$mysqli = new Mysqli();
$mysqli->connect("localhost","root","", "cards");


if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>