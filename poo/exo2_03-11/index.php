<?php

require("C:\laragon\www\PHP\poo/exo2_03-11\header.php");

require("C:\laragon\www\PHP\poo/exo2_03-11/voitures.php");

$voiture1 = new voiture("fp-501-wz", "Blanche", 1500, 180, 60.00,5);

$voiture1->getImmat();
$voiture1->getCouleur();
$voiture1->getPoids();
$voiture1->getPuissance();
$voiture1->getCapReservoir();
$voiture1->getNivEssence(5.0);
$voiture1->getNbrPlace();

echo"<pre>";
var_dump($voiture1);

require("C:\laragon\www\PHP\poo/exo2_03-11/footer.php");

?>

