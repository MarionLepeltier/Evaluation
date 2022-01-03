<?php

class Personnage {
    public $name;
    private $healthPoint;
    private $attack;
    private $defense;
    private $mana;
    public $items;

    public function __construct(
        
        $name, $healthPoint, $attack, $defense, $mana, $items
    ){
        $this->name = $name;
        $this->healthPoint = $namePoint;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->mana = $mana;
        $this->items = $items;
        
    }


    // Creer une fonction qui affiche les stats

    public function afficher_stats(){
        echo "Les statistiques de $this->name sont : \n -";
        echo $this->healthPoint." health point\n -";
        echo $this->attack." attack\n -";
        echo $this->defense." defense \n -";
        echo $this->mana." mana \n ";  
    }

 

}



?>