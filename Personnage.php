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
        $this->healthPoint = $healthPoint;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->mana = $mana;
        $this->items = $items;
        
    }


    // Creer une fonction qui affiche les stats

    public function afficher_stats(){
        echo "Les statistiques de $this->name sont : \n -";
        echo $this->healthPoint." health points\n -";
        echo $this->attack." attack\n -";
        echo $this->defense." defense \n -";
        echo $this->mana." mana \n ";  
        // echo "Il posséde ".$this->items;
    }

    // Fonction get qui permet de rendre visible les attributs privés.
    public function getHealthPoint(){
        return $this->healthPoint;
    }
    public function getAttack(){
        return $this->attack;
    }
    public function getDefense(){
        return $this->defense;
    }
    public function getMana(){
        return $this->mana;
    }

    // Fonction Set pout modifier les valaures des attibuts
    public function setHealthPoint($newHealth){

        return $this->healthPoint = $newHealth;
    }

    public function setAttack($newAttack){

        return $this->attack = $newAttack;
    }

    public function setDefense($newDefense){

        return $this->defense = $newDefense;
    }

    public function setMana($newMana){

        return $this->mana = $newMana;
    }


    // // Fonction pour ajouter des items
    public function addItems($newItems){
        array_push($this->items, "$newItems");
    }
}



?>