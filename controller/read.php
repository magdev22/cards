<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php");

use Model\ConnectDb;

$products =(new ConnectDb)->getConnection()->query("SELECT * FROM products");
