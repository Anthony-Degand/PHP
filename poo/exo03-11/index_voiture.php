<?php
require("C:\laragon\www\PHP\poo/exo03-11/voiture.php");

$audi = new voiture();

$audi->codeVin = 758869;
$audi->marque = "Audi";
$audi->couleur = "Gris";
$audi->immat = "sg-426-jv";

$honda = new voiture();

$honda->codeVin = 425637;
$honda->marque = "Honda";
$honda->couleur = "Bleu";
$honda->immat = "tj-753-sd";

$peugeot = new voiture();

$peugeot->codeVin = 925863;
$peugeot->marque = "Peugeot";
$peugeot->couleur = "Rouge";
$peugeot->immat = "fp-501-wz";

?>

<table>
    <tr>
        <td>Véhicule 1</td>
        <td>Véhicule 2</td>
        <td>Véhicule 3</td>
    </tr>

    <tr>
        <td><?php $audi->show(); ?></td>
        <td><?php $honda->show(); ?></td>
        <td><?php $peugeot->show(); ?></td>
    </tr>
    
</table>