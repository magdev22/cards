
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/model/db.php");
$sql = "DELETE FROM products WHERE id=" . $_GET['id'];
if ($mysqli->query($sql)) {

} else {
    echo "Ошибка: " . $mysqli->error;
}
