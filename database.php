<?php

$user = 'root';
$password = 'root';
$db = 'lab4';
$host = 'localhost';
$port = 8889;
$table = 'articles';

$select_articles = 'SELECT * from articles';

$mysqli = new mysqli($host, $user, $password, $db, $port);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$res = $mysqli->query("SELECT * FROM articles");

echo "Записи в таблице\n";
$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['id'] . "\n";
}

function createArticle($title, $text)
{
    $insert_query = 'INSERT INTO `articles` (`id`, `title`, `text`, `date`) VALUES (NULL, ' . $title . ', ' . $text . ', ' . date() . ')';
    $GLOBALS['mysqli']->query("SELECT * FROM articles");
    echo $title;
}