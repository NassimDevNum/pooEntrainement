<?php
class Personnage {

    public $vie = 80;
    public $int = 20;
    public $nom;
    public $enVie=true;

    public function __construct($nom)
    {
        $this->nom = $nom; //ici on la sauvegarde car si non elle est perdu 
    }

    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 100;
        } else 
        {
            $this->vie = $this->vie+ $vie;
        }
    }

    public function leviosa(){
        $this-> int = 50;
    } 

    public function mort(){
       
        if ($this->vie <=0){
            $this->enVie = false;
        }
    }
}


?>