<?php

require("C:\laragon\www\PHP\poo/exo2_03-11\header.php");

require("C:\laragon\www\PHP\poo/exo2_03-11/voitures.php");

$voiture1 = new voiture("fp-501-wz", "Blanche", 1500, 180, 60.00,5);

$voiture1->getImmat();
$voiture1->getCouleur();
$voiture1->getPoids();
$voiture1->getPuissance();
$voiture1->getCapReservoir();
$voiture1->getNivEssence();
$voiture1->getNbrPlace();
$voiture1->setDashboard('Bienvenue à bord');
$voiture1->setassure(false);
echo"<pre>";
print_r($voiture1);
$voiture1->getassure();

require("C:\laragon\www\PHP\poo/exo2_03-11/footer.php");

?>

