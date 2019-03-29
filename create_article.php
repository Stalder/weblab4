<?php include_once "components.php" ?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Администраторская панель</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"/>
</head>
<body>
<div class="container">
    <?php renderHeader('Администраторская панель') ?>

    <h3>Создание нового материала</h3>

    <div class="row">
        <div class="input-field col s12">
            <input id="title" type="text" class="validate">
            <label for="title">Название статьи</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <textarea id="textarea" class="materialize-textarea"></textarea>
            <label for="textarea">Материал</label>
        </div>
    </div>

    <a class="waves-effect waves-light btn blue darken-3">Создать</a>

</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>