<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/model/db.php");

$sql = "CREATE TABLE products(
  id INT  PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(30) NOT NULL,
  descr VARCHAR(250) NOT NULL,
  price VARCHAR(70) NOT NULL UNIQUE,
  img VARCHAR(300) NOT NULL UNIQUE
)";

if($mysqli->query($sql)===true){
  echo "Table created successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " . $mysqli->connect_error;
}