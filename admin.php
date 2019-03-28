<?php include_once "components.php" ?>

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

    <?php renderArticleForAdmin('Cool article', date()) ?>
    <?php renderArticleForAdmin('Cool article 2', date()) ?>
    <?php renderArticleForAdmin('Cool article 2', date()) ?>
</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>