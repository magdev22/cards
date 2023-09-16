<?php

$mysqli = new Mysqli();
$mysqli->connect("db", "admin", "admin", "cards");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
