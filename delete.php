
<?php
include('db.php');

$sql = "DELETE FROM products WHERE id=".$_GET['id'];
if($mysqli->query($sql)){
     
    header("Location: index.php");
}
else{
    echo "Ошибка: " . $mysqli->error;
}
?>