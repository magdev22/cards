<?php
require_once __DIR__ . '/../vendor/autoload.php';

$page = '/';
echo $_SERVER['DOCUMENT_ROOT'];
require_once($_SERVER['DOCUMENT_ROOT'] . "/view/home.php");
