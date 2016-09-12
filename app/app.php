<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/QueenAttack.php";

 date_default_timezone_set('America/Los_Angeles');

 $app = new Silex\Application();

 $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
));

 $app->get("/", function() use ($app){
 return $app['twig']->render('home.html.twig');
  });
  $app->post("/results", function() use ($app){
    $newQueenAttack = new QueenAttack;
    $results = $newQueenAttack->Attack($_POST['input_playerX'], $_POST['input_playerY'], $_POST['input_queenX'], $_POST['input_queenY']);

  return $app['twig']->render('results.html.twig', array('results'=> $results));
   });

  return $app;
?>
