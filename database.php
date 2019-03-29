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

function createConnection()
{
    $user = 'root';
    $password = 'root';
    $db = 'lab4';
    $host = 'localhost';
    $port = 8889;

    $mysqli = new mysqli($host, $user, $password, $db, $port);
    if ($mysqli->connect_errno) {
        die('Cannot connect to mySQL');
    }

    return $mysqli;
}

function requestArticles() {
    $mysqli = createConnection();

    $select_articles = 'SELECT * from articles';
    $res = $mysqli->query($select_articles);
    $res->data_seek(0);

    return $res;
}

function createArticle($title, $text)
{
    $mysqli = createConnection();
    $insert_query = 'INSERT INTO `articles` (`id`, `title`, `text`, `date`) VALUES (NULL, ' . $title . ', ' . $text . ', ' . date() . ')';
    $mysqli->query($insert_query);
}

function removeArticle($id)
{
    $mysqli = createConnection();
    $remove_query = 'delete from article where id = ' . $id;
    $mysqli->query($remove_query);
}