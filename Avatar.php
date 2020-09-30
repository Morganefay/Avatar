<?php
namespace App;

require "vendor/autoload.php";


class Avatar {

// Déclaration des propriétés
private $size= 4;
public $grille = [];//on instancie un tableau vide
private $colors = ['green','pink','purple','red','yellow','cyan','orange','brown','silver','gold'];

public function __construct($size, $colors){
      $size = $this->size;
      $colors = $this->colors; 
      $this->grille = $this->genTab();

  }
  
//Getters de variables privées
public function getSize(){
  return $this->size;
}

public function getColors(){
  return $this->colors;
}

public function getGrille(){
  return $this->grille;
}


public function genTab() {
//on boucle sur le grand tableau
for ($i=0; $i<$this->size ; $i++) { 
    $row=[];
    //on boucle sur les lignes

    for ($j=0; $j<$this->size; $j++) { 
     
    //on boucle sur les cases
     for ($h=0; $h < ($this->size/2) ; $h++) { 
        $color = array_rand($this->colors, 1);
        $row[$h] = ($this->colors[$color]);
        $row[($this->size - 1) - $h] = ($this->colors[$color]);
     }
    };
  ksort($row);
  $grille[]= $row;
  
};
  return $this->grille = $grille;
  
  }
  
}

?>