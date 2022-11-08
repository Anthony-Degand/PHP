<?php

class personnage{ // On ouvre une class 

    public $vie = 80; // definis des variables 
    public $atk = 20;
    public $nom; // bonne pratique d'instancier une variable meme si elle n'a pas de valeur 

    public function crier(){ // crée des fonctions
        echo 'leeroy jenkin\'s';
    }
    public function regenerer($vie = null){ // "" "" "" avec en parametre la vie ( nul par défaut)
        if(is_null($vie)){
            $this->vie = 100; // si $vie est nul -> sa vie passe a 100
        }else{
            $this->vie = $this->vie + $vie; // sinon sa vie = sa vie + la somme inscrite en parametre
        }
    }
    public function __construct($nom){ // on utilise la fonction __construct qui permet de definir un nom direcement dans l'instanciation et obtenir un code plus propre
        $this->nom = $nom; // "la variable selectionner" son nom est la variable $nom
    }
  public function mort(){

    return $this->vie <= 0; // si la vie est inferieur ou égale a 0 il est mort
  }
  private function empecher_negatif(){ // fonction utile uniquement a l'interieur de ma class donc c'est une bonne pratique de la metre en priver
    if($this->vie < 0){ // si la vie passe sous 0
        $this->vie = 0; // elle reste a 0
    }
  }
  public function attaque($cible){
    $cible->vie -= $this->atk; // la vie de la cible - l'attaque de l'attaquant
    $cible->empecher_negatif();
    var_dump($cible); // je vérifie l'identiter de la cible ( facultatif )

  }

}
