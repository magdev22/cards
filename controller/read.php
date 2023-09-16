<?php
//view 'home.php'

require_once($_SERVER['DOCUMENT_ROOT'] . "/model/db.php");


$products = $mysqli->query("SELECT * FROM products");

