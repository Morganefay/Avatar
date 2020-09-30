<?php
use App\Avatar;


class SquareSVG {

    public $x = 100;
    public $y = 100;
    public $laTailleDeMonCarre = 50;
    public $grille = [];
    public $size;
    public $colors;
    public $fill;

    public function __construct($size, $colors){

      $avatar = new Avatar($size, $colors);
      $this->grille = $avatar->grille;
       
    }

    public function genSquare(int $x, int $y, int $laTailleDeMonCarre, string $fill){

      return '<rect x="'.$x.'" y="'.$y.'" width="'.$laTailleDeMonCarre.'" height="'.$laTailleDeMonCarre.'" fill="'.$fill.'"  />';
    }

    public function render(){
          $x = $this->x;
          $y = $this->y;
          $genSvg = [];

          for ($i=0; $i < (count($this->grille)); $i++) { 
                  $y += $this->laTailleDeMonCarre;
                  $x = $this->x;
            for ($j=0; $j < (count($this->grille)); $j++) { 

                      $colorCell = $this->grille[$i][$j];
                      $x += $this->laTailleDeMonCarre;
                      $square = $this->genSquare($x, $y, $this->laTailleDeMonCarre, $fill=$colorCell);

                      array_push($genSvg,$square);

                }
          }
         return '<svg  width="1200"height="800">' . implode(" ", $genSvg) . '<\svg>';

    }
}