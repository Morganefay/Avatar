<?php

require "vendor/autoload.php";

$size= 5;
$bigTab = [];//on instancie un tableau vide
$colors = ['green','pink','purple','red','yellow'];

//on boucle sur le grand tableau
for ($i=0; $i<$size ; $i++) { 
    $row=[];
    //on boucle sur les lignes

    for ($j=0; $j<$size; $j++) { 
     $color = array_rand($colors, 1);
     $row[]= ($colors[$color]);

    // $jMax = $row[count($row)-1];
     //echo $jMax . " ";
    };
 
  $bigTab[]= $row;
  
}
dump($bigTab);
//dump($color);


?>
