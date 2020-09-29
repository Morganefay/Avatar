<?php

require "vendor/autoload.php";

$size= 4;
$bigTab = [];//on instancie un tableau vide
$colors = ['green','pink','purple','red','yellow','cyan','orange','brown'];

//on boucle sur le grand tableau
for ($i=0; $i<$size ; $i++) { 
    $row=[];
    //on boucle sur les lignes

    for ($j=0; $j<$size; $j++) { 
     
    //on boucle sur les cases
     for ($h=0; $h < ($size/2) ; $h++) { 
        $color = array_rand($colors, 1);
        $row[$h] = ($colors[$color]);
        $row[($size - 1) - $h] = ($colors[$color]);
     }
    };
  ksort($row);
  $bigTab[]= $row;
  
}
dump($bigTab);

//dump($color);


?>
