<?php
  class QueenAttack
  {
    function Attack($playerX, $playerY, $queenX, $queenY)
    {
      if($playerX == $queenX){
        return true;
      }
      elseif ($playerY == $queenY){
        return true;
      }
      elseif (abs($playerX-$queenX) == abs($playerY-$queenY)){
        return true;
      }
      else {
        return false;
      }
    }
  }

 ?>
