<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="titre">Exo 01</h1>
    <?php 
    echo "<h5>Hello world !! </h5>";  //afficher en php
    echo "<h4>Hello world !! </h4>";
    echo "<h3>Hello world !! </h3>";
    echo "<h2>Hello world !! </h2>";
    echo "<h1>Hello world !! </h1>";
//****************************************************************** */
    // corriger : 
    echo "<h2 class=\"titre\">Corriger :</h2>";

    for ($i = 3; $i <= 7; $i++) {   
        echo "<font size=\"$i\"> Hello world ! </font><br />";
    }

//****************************************************************** */

echo "<h1 class=\"titre\">Exo 02</h1>";

    $date = date('d F Y'); // afficher la date avec la methode date() en specifiant le format 

    date_default_timezone_set('Europe/Paris'); // formater la date et l'heure sur paris 
    $heure = date('H'); //déclarer une variable pour stocker les heures
    $minutes = date('i'); // déclarer une variable pour stocker les minutes 

    echo ("<h1>En ce ".$date.", sur le serveur ".$_SERVER['SERVER_NAME'].", il est ".$heure."h ".$minutes."mn. </h1>");
    ?>
    <table class="tab">
        <tr>
            <th>Variable</th>
            <th>Valeur</th>
        </tr>

        <tr>
            <td>GATEWAY_INTERFACE</td> 
            <td><?php echo $_SERVER['GATEWAY_INTERFACE']; ?> </td> <!-- objet $_server[] pour accéder au information du serveur-->
        </tr>

        <tr>
            <td>SERVER_NAME</td>
            <td><?php echo $_SERVER['SERVER_NAME']; ?> </td>
        </tr>

        <tr>
            <td>SERVER_SOFTWARE</td>
            <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?> </td>
        </tr>

        <tr>
            <td>SERVER_PROTOCOL</td>
            <td><?php echo $_SERVER['SERVER_PROTOCOL']; ?> </td>
        </tr>

        <tr>
            <td>SERVER_METHOD</td>
            <td><?php echo $_SERVER['REQUEST_METHOD']; ?> </td>
        </tr>

        <tr>
            <td>QUERY_STRING</td>
            <td><?php echo $_SERVER['QUERY_STRING']; ?> </td>
        </tr>

        <tr>
            <td>DOCUMENT_ROOT</td>
            <td><?php echo $_SERVER['DOCUMENT_ROOT']; ?> </td>
        </tr>

        <tr>
            <td>HTTP_ACCEPT</td>
            <td><?php echo $_SERVER['HTTP_ACCEPT']; ?> </td>
        </tr>
    </table>
//****************************************************************** */
    <h2 class="titre">Corriger :</h2>

    <?php $cejour = getdate();?> <!--methode getdate() = deuxieme facon pour afficher la date -->

    <h2>En ce <?php echo $cejour["mday"] . " " . $cejour["month"] . " " . $cejour["year"]; ?>, <!--Utilisation des objet jours mois années-->
    sur le serveur <?php echo $_SERVER["SERVER_NAME"]; ?>,      <!--objet server-->
    il est <?php echo $cejour["hours"] . "h " . $cejour["minutes"] . "mn" ;?>.<br /><br /></h2> <!--objet heures et minutes-->

    <table border="1">
    <?php foreach ($_SERVER as $variable=>$valeur) { ?>
        <tr>
            <td><?php echo $variable ; ?></td>
            <td><?php echo $valeur ; ?>&nbsp;</td>
        </tr>
    <?php } ?>
    </table>
 //***************************************************************** */   
    <h1 class="titre">Exo 03</h1>




    


</body>
</html>


































































