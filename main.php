<?php

//////////////////////////////
// Inclusion des dépendances /
//////////////////////////////
use App\Avatar;


require "vendor/autoload.php";
require 'Avatar.php';
require 'SquareSVG.php';

$svg = new SquareSVG(4, ['green','pink','purple','red','yellow','cyan','orange','brown','silver','gold']);

$carre = $svg->render();
include 'main.phtml';



