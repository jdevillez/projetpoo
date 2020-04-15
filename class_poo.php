<?php

class player{
    
    private $_nom;
    private $_health;
    private $_strenght;
    private $_agility;
    private $_speed;

    public function __construct( $nom, $health, $strenght, $agility, $speed ) {
        
        $this->_nom = $nom;
        $this->_health = $health;
        $this->_stenght = $strenght;
        $this->_agility = $agility;
        $this->_speed = $speed;
    } 

 // GETTER (recup de données) obligatoire
    public function getNom() {
    return $this->_nom;
    }   
    public function getHealth() {
        return $this->_health;
    }
    public function getStrenght() {
        return $this->_strenght;
    }
    public function getAgility() {
        $this->_agility;
    }
    public function getSpeed() {
        return $this->_speed;
    }
 // SETTER (modif) pas obligatoire

    public function setNomFilm ( $health) {
        
        $this->_health = $health;
        
    }

public function attaque() {
        $calcBaseDamage = $this->_stenght * $this->_agility / 1000;
        $offDamage = rand(1, 10);
        $totalDamage = $calcBaseDamage + $offDamage;
        $calcNumberOfHit = $this->_agility + ((rand(1, 10) /10) /2) + 1; 
        // test around hit
        $numberOfHit = round($calcNumberOfHit, 0);
        
        $attakvalue = $totalDamage * $numberOfHit;
    }

  



























}
?>