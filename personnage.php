<?php
class Personnage { //

    public $vie = 80;   // les propriéter
    public $int= 20;
    public $nom;
    public $enVie=true;

    public function __construct($nom)
    {
        $this->nom = $nom; //ici on la sauvegarde car si non elle est perdu 

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
    



}
?>