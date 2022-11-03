<?php
//methode show ?

class voiture{

    public $marque;
    public $couleur;
    public $immat;
    public $codeVin;


    public function show(){
        echo "<h2>$this->marque<br>$this->couleur<br>$this->immat<br>$this->codeVin</h2>";
    }

    
}

?>