<?php

class Form{ // permet de générer un formulaire rapidement et simplement

    private $data; //donnée utiliser par le formulaire 

    public $surround = 'p'; // variable surround(entourer) : tag utiliser pour entourner les champs

    public function __construct($data = array()){ // ma variable data est de base un tableau vide (donnée utiliser par le formulaire)
        $this->data = $data; // si dans mon champs il y a des données les stockée dans une variable $data  
    }

    private function surround($html){ // fonction pour entourer le code html
        return "<{$this->surround}>$html</{$this->surround}>";
    }
// index de la valeur a récupérer
    private function getValue($index){ // afficher automatiquement les infos au préalablement remplis dans le formulaire
        return isset($this->data[$index]) ? $this->data[$index] : null; // ternere qui contien toute les donner passer en parametre, isset(si sa existe) on le lie sinon (:) on retourne rien (null)
    }

    public function input($name){ // renvoie ma fonction paragraphe avec mon input a l'interieur
       return $this->surround('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">','p');
    }
    public function submit(){ //"" "" ""
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}

?>