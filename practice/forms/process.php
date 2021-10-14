<?php

$answer = $_POST['answer'];

if ($answer == 'pumpkin') {
 #   var_dump('Correct!');
    $correct = true;
}
else {
  #  var_dump('Incorrect');
    $correct= false;
}
require 'process-view.php';