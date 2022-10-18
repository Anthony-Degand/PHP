<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bonjour = "bonjour le monde !";
    echo "<p>$bonjour</p>";
    echo $_SERVER["REMOTE_ADDR"];
    echo "<br/><br/>";
    echo $_SERVER["SERVER_ADDR"];
    ?>
</body>
</html>