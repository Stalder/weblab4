<?php include_once "components.php" ?>
<?php include_once "database.php" ?>
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

    <div class="row">
        <a class="waves-effect waves-light btn blue darken-3" href="create_article.php">Добавить статью</a>
    </div>

    <?php
    $articles = requestArticles();
    while ($row = $articles->fetch_assoc()) {
        renderArticleForAdmin($row['id'], $row['title'], $row['date']);
    }
    ?>
</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>