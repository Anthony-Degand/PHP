<?php

class voiture {

    private string $immatriculation; // chaine de caractères
    private string $couleur; // chaine de caractères
    private int $poids; // entier
    private int $puissance; // entier
    private float $capacite_reservoir; // décimal
    private float $niveau_essence; // décimal
    private int $nbr_place; // entier
    private bool $assure; // booléen
    private string $msg_dashboard; // chaine de caratères


    public function __construct(string $immatriculation,string $couleur,int $poids,int $puissance,float $capacite_reservoir,int $nbr_place){ // on utilise la fonction __construct qui permet de definir l'immat direcement dans l'instanciation et obtenir un code plus propre
        $this->immatriculation = $immatriculation; // "la variable selectionner" : son immat est la variable $immat
        $this->couleur = $couleur; //
        $this->poids = $poids; //
        $this->puissance = $puissance; //
        $this->capacite_reservoir = $capacite_reservoir; //
        $this->nbr_place = $nbr_place; //

    }

    public function getImmat(){
        return $this->immatriculation;
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function getPoids(){
        return $this->poids;
    }
    public function getPuissance(){
        return $this->puissance;
    }
    public function getCapReservoir(){
        return $this->capacite_reservoir;
    }
    public function getNivEssence(){
        return $this->niveau_essence = 5.0;
    }
    public function getNbrPlace(){
        return $this->nbr_place;
    }
    // public function getMsgDashboard(){
    //     return $this->msg_dashboard;
    // }

    // public function setAssure($assure){
    //     return $this->assure = $assure;
    // }

    public function setDashboard($msg_dashboard){
        return $this->msg_dashboard = $msg_dashboard;
    }


    
    }


?>