
<?php
require($_SERVER['DOCUMENT_ROOT'] . "/model/db.php");
if ($mysqli_connect) {

        $sql = "DELETE FROM products WHERE id=" . $_GET['id'];

        if ($mysqli->query($sql)) {

        } else {
            echo "Ошибка: " . $mysqli->error;
        }
    }