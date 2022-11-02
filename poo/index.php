<?php
require ("C:\laragon\www\PHP\poo\personnage.php"); // on lie la page de notre class personnage

$merlin = new personnage("Merlin"); // on utilise la class pour donner ses propriéter à nos variables
$merlin->regenerer(5);
$harry = new personnage("Harry");  // "" "" "" "" ( on ne met rien entre paranthése à moin d'avoir crée la fonction d'instanciation)
$harry->regenerer();
// $merlin->nom = "Merlin"; // on peut instancier un nom a la variable de nom qui na pas était définis
// $harry->nom = "Harry";

$merlin->attaque($harry);
if($harry->mort()){
    echo'Harry est mort :(';
}else{
    echo 'Harry a survécu avec ' . $harry->vie . ' pv';
}

echo "<pre>"; // presentation propre
var_dump($harry,$merlin); // on affiche les infos de merlin et harry 


?>