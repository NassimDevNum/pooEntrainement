<?php
class Personnage { //

    public $vie = 80;   // les propriéter
    public $int= 20;
    public $nom;
    public $enVie=true;
    
    public $sex;
    public $robe;

    public $poids;
    public $matiere;

    public function __construct($nom,$sex,$poids)
    {
        $this->nom = $nom; //ici on la sauvegarde car si non elle est perdu 
        $this->sex = $sex;
        $this->poids = $poids;
    }
        //
   public function regenerer($vie=null){ // puis on fait des méthode 
        if($this->vie == 0){
            $this->vie = 100;
        }
        else {
            $this->vie = $this->vie + $vie;
        }
   }

    public function leviosa(){
        $this-> int = 50;
    } 

    public function mort(){
       
     return$this->vie <=0;
    }

    public function attaque ($cible)
    {
        $cible->vie -= $this->int;
    }
    
    public function couleurR()
    {
        if($this->sex=='f')
        {
            $this->robe = "rouge";
        }
        else 
        {
            $this->robe = "bleue";
        }
    }

    public function algoMati()
    {
        if($this->poids>=70){
            $this->matiere = 'potion';
        }
        else {
            $this->matiere = 'kwiditch';
        }
    }


}
?>