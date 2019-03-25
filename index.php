<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Лаб 4</title>
</head>
<body>
    <?php include_once 'database.php'; ?>

    <?php
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
        $txt = "Lol, really?";
        echo "<h2>" . $txt . "</h2>"
    ?>
</body>
</html>