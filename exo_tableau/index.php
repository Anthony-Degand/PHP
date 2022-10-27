<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<table> <!-- j'ouvre mon tableau et définit les titre de celules -->
    <tr>
        <td class="vert">Prenoms</td>
        <td class="vert">Notes</td>
    </tr>

<?php
// je crée mon tableau associatif
$eleves = array("jimmy" => "18/20" , "halim" => "20/20" , "greg" => "12/20", "cedric" => "32/20" , "anthony" => "12/20", "oceane" => "oceane/20");
ksort($eleves); //ksort renvoie la valeur les "key" entre les "" au lieux de l'id de position

 foreach($eleves as $nom => $notes) { // lister eleves "nom" => "notes"
   echo "<tr><td>  $nom </td><td>  $notes </td></tr>"; // afficher nom => notes lister dans un tableau 
   

};

?>



</body>
</html>