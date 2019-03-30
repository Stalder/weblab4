<?php
include_once "components.php";
include_once "database.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST["title"] && $_POST["text"]) {
        echo createArticle($_POST["title"], $_POST["text"]);
        header('Location: ../admin.php');
    } else {
        echo "Переданы не все данные";
    }
    exit();
}
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Администраторская панель</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"/>
</head>
<body>
<div class="container">
    <?php renderHeader('Администраторская панель') ?>

    <h3>Создание нового материала</h3>

    <form action="create_article.php" method="post">

        <div class="row">
            <div class="input-field col s12">
                <input id="title" type="text" class="validate" name="title" required>
                <label for="title">Название статьи</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea" class="materialize-textarea" name="text" required></textarea>
                <label for="textarea">Материал</label>
            </div>
        </div>

        <button class="btn waves-effect waves-light blue darken-3" type="submit" name="action">Создать
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>