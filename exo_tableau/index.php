<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="i-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<h1> exo 1 : </h1>

<?php

$tab = array("jimmy", "halim", "greg", "cedric", "anthony", "oceane");

rsort($tab);

//afficher le tableau en html

//echo "<pre>";

//print_r($tab);


//afficher le contenue du tableau proprement
 $compteur = count($tab); // variable compteur pour stocker le nombre de donnée dans mon tableau

 for ( $i = 0; $i < $compteur; $i ++ ) { // pour i qui vos 0 , le temps que i est inferieur au nombre de donnée, i ++

    echo "<pre>"; // mise en forme 

    echo $tab[$i]; // afficher les iterration du tableau 

 } 
 ?> 
 
 <h1> exo 2 : </h1>

<table> <!-- j'ouvre mon tableau et définit les titre de celules -->
    <tr>
        <td class="vert">Prenoms</td>
        <td class="vert">Notes</td>
    </tr>

<?php
// je crée mon tableau associatif
$eleves = array("jimmy" => "18/20" , "halim" => "20/20" , "greg" => "12/20", "cedric" => "32/20" , "anthony" => "12/20", "oceane" => "oceane/20");
ksort($eleves); //ksort renvoie la valeur les "key" entre les "" au lieui de l'id de position

 foreach($eleves as $nom => $notes) { // lister eleves "nom" => "notes"
   echo "<tr><td>  $nom </td><td>  $notes </td></tr>"; // afficher nom => notes lister dans un tableau

};

?>



<?php



function multiplier($nombre){
 ?>   
 <div class="cont">
   <table class="table2">
        <tr><td>Multiplication</td><td>Résultat</td></tr>
<?php
    $multiplicateur = 1;
    $i = 0;

    while($i <= 10){ // tant que mon ittération est inferieur ou = à 10
        $multiplicateur = $nombre*$i; // le multiplicateur est = au nombre fois l'ittération
        echo "<tr><td>$nombre x $i</td><td> $multiplicateur</td></tr> <br>"; // afficher le nombre fois l'ittération est = au multiplicateur
        $i++; // on incrémente l'ittération de 1
    }
    ?>
    </table>
</div> 
    <?php
}
?>

<?php

echo multiplier($nombre=1),multiplier($nombre=2),multiplier($nombre=3),multiplier($nombre=4),multiplier($nombre=5);

?>




</body>
</html>