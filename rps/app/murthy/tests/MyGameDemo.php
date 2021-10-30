<?php
require __DIR__.'../../vendor/autoload.php';
//require $_SERVER['DOCUMENT_ROOT'].'/samples/rock-paper-scissors/src/Game.php';
//require 'Game.php';
//require 'MyGame.php';
//require 'Debug.php';

use APP\Game as Game;
use APP\MyGame as MyGame;
use APP\Debug as Debug;
#
$game1 = new Game(true);
$game2 = new MyGame(true);
#
$game1->play("rock");
//var_dump($move = ($game1->getResults()));
//Debug::dump($move = ($game1->getResults()));
#
$game2->play("head");
//var_dump($move = ($game2->getResults()));
Debug::dump($move = ($game2->getResults()));


// var_dump(['a', 'b', ['x', 'y', 'z']]);
//Debug::dump(['a', 'b', ['x', 'y', 'z']]);