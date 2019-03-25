<?php
/**
 * This file allows to connect to database and execute SQL queries.
 * Vars bellow are credentials for local database, created for this lab.
 * Then a little example of select query and template for insert function.
 */
$user = 'root';
$password = 'root';
$db = 'lab4';
$host = 'localhost';
$port = 8889;
$table = 'articles';

$select_articles = 'SELECT * from articles';

$mysqli = new mysqli($host, $user, $password, $db, $port);
if ($mysqli->connect_errno) {
    die('Cannot connect to mySQL');
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