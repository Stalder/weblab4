<?php include_once "components.php" ?>
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

    <?php renderArticlePreview('Cool article', 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
        date()) ?>


    <?php renderArticlePreview('Cool article', 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
        date()) ?>


    <?php renderArticlePreview('Cool article', 'When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.',
        date()) ?>
</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>