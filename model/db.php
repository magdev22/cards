<?php

$mysqli = new Mysqli();
$mysqli_connect = $mysqli->connect("localhost", "admin", "admin", "cards");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

