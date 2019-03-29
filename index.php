<?php include_once "components.php" ?>
<?php include_once "database.php" ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Новостной портал</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"/>
</head>
<body>
<div class="container">
    <?php renderHeader('Новостной портал') ?>

    <?php
    $articles = requestArticles();
    while ($row = $articles->fetch_assoc()) {
        renderArticle($row['title'], $row['text'], $row['date']);
    }
    ?>
</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>