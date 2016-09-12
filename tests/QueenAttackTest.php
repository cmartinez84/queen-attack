<?php
    require_once "src/QueenAttack.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
      function test_Attack_horizontal(){
        $test_QueenAttack = new QueenAttack;
        $playerX = "4";
        $playerY = "3";
        $queenX = "4";
        $queenY= "10";

        $result = $test_QueenAttack->Attack($playerX, $playerY, $queenX, $queenY);

        $this->assertEquals(true, $result);
      }

      function test_Attack_vertical(){
        $test_QueenAttack = new QueenAttack;
        $playerX = "5";
        $playerY = "2";
        $queenX = "4";
        $queenY= "2";

        $result = $test_QueenAttack->Attack($playerX, $playerY, $queenX, $queenY);

        $this->assertEquals(true, $result);
      }
      function test_Attack_diagnol(){
        $test_QueenAttack = new QueenAttack;
        $playerX = "2";
        $playerY = "2";
        $queenX = "4";
        $queenY= "4";

        $result = $test_QueenAttack->Attack($playerX, $playerY, $queenX, $queenY);

        $this->assertEquals(true, $result);
      }
    }
  ?>
