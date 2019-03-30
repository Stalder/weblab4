<?php
include_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST["id"]) {
        echo removeArticle($_POST["id"]);
        header('Location: ../admin.php');
    } else {
        echo "Переданы не все данные";
    }
} else {
    echo 'Чот ты заплутал, а ну проваливай';
}