<?php
    session_start();
    $username = $_SESSION["username"]; // definit une variable pour stocker mon username
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
        // si username et password ne sont pas executer dans la session en cours alors : 
        if (!(isset($_SESSION["username"])) && (!(isset($_SESSION["password"])))) {
        ?>
        <h1>ERREUR login : vous n'avez pas droit d'accès a ce site</h1> 
        <p><a href="login.html">Retour à la page d'accueil</a></p>

        <?php
        } // sinon, afficher le contenue.
        else {
            echo "    <h1>Au menu du jour pour $username</h1>
            <ul>
                <li> <a href=`login.html`>Sommaire</a> </li>
                <li>Et aussi...</li>
                <li>Et encore...</li>
                <li>Et pour finir...</li>
            </ul>";
        }
    ?>
  
</body>
</html>