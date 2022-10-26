<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/CSS/styles.css">
    <title>Document</title>
</head>
<body>

    <?php
        if (!(isset($_SESSION["username"])) && (isset($_SESSION["password"]))) {
            echo "ERREUR login !";
        }
        else {
            echo "coucou";
        }
    ?>

    <h1>Au menu du jour pour <?php echo $_SESSION["username"] ?></h1>

    <ul>
        <li> <a href="">Sommaire</a> </li>
        <li>Et aussi...</li>
        <li>Et encore...</li>
        <li>Et pour finir...</li>
    </ul>
  
</body>
</html>