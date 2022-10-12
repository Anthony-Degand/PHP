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
    echo "<h5>Hello world !! </h5>";
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

    $date = date('d F Y');

    date_default_timezone_set('Europe/Paris');
    $heure = date('H');
    $minutes = date('i');

    echo ("<h1>En ce ".$date.", sur le serveur ".$_SERVER['SERVER_NAME'].", il est ".$heure."h ".$minutes."mn. </h1>");
    ?>
    <table class="tab">
        <tr>
            <th>Variable</th>
            <th>Valeur</th>
        </tr>

        <tr>
            <td>GATEWAY_INTERFACE</td>
            <td><?php echo $_SERVER['GATEWAY_INTERFACE']; ?> </td>
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

    <?php $cejour = getdate();?>

    <h2>En ce <?php echo $cejour["mday"] . " " . $cejour["month"] . " " . $cejour["year"]; ?>,
    sur le serveur <?php echo $_SERVER["SERVER_NAME"]; ?>,
    il est <?php echo $cejour["hours"] . "h " . $cejour["minutes"] . "mn" ;?>.<br /><br /></h2>

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


































































