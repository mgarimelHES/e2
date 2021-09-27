<?php

 //echo "leverage inlcude"; 
# include view
 include 'index-view.php';
 //echo "done include";
 # Define two arrays for the moves of both players
 $a=array("Rock","Paper","Scissors");
 $b=array("Rock","Paper","Scissors");
# Generate a randon key for both players to pick their move
$player1 = $a[rand(0,2)];
$player2= $b[rand(0,2)];
/*
Follow these game rules -
-
- if both players moves are equal they are tied
- If player1 move is 'Rock' and Player2 move is 'Scissors', then player1 wins otherwise player2. In this case php logical operator has been used for 'and' condition.
- If player1 move is 'Rock' and Player2 move is 'Paper', then player2 wins otherwise player1.
- If Player1 move is 'Scissors' and Player2 move is 'Paper', then player1 wins otherwise player2.
- If Playe1 move is 'Scissors' and Player2 move is 'Rock' then player2 wins
- If Player1 move is 'Paper' and player2 move is 'Rock' then Player1 wins otherwsie Player2.
-
*/ 
# Under Construction code for the business logic of the game
//
# Set initial values for Game winner boolean type
/*

!!!!  U N D E R   C O N S T R U C T I O N   !!!!!
$player1Wins = false;
$player2Wins = false;
#
# Game Logic begins with check if their moves are equal, then it will be a 'tie'
#
if ($player1 == $player2)
{
echo "tied \n", PHP_EOL;
echo $player1, PHP_EOL;
echo $player2, PHP_EOL;
}
else {
    echo $player1, PHP_EOL;
    echo $player2, PHP_EOL;
    echo "no match!!", PHP_EOL;
# player1 move is 'Rock' and Player2 move is 'Scissors'
    if (($player1 == 'Rock') && ($player2 == 'Scissors')) {
        echo "Player1 move is Rock \n";
        echo "Player2 move is Scissors \n";
        echo "Player 1 wins \n";
        echo "Player 2 loses \n";
        $player1Wins = true;
# player1 move is 'Rock' and Player2 move is 'Paper'
    } elseif (($player1 == 'Rock') && ($player2 == 'Paper')) {
        echo "Player1 move is Rock \n";
        echo "Player2 move is Paper \n";
        echo "Player 1 loses \n";
        echo "Player 2 wins \n";
        $player2Wins = true;
# Player1 move is 'Scissors' and Player2 move is 'Rock'
    } elseif (($player1 == 'Scissors') && ($player2  == 'Rock') ) {
        echo "Player1 move is Scissors \n";
        echo "Player2 move is Rock \n";
        echo "player 1 loses \n";
        echo "player 2 wins \n";
        $player2Wins = true;
# Player1 move is 'Scissors' and Player2 move is 'Paper'
    } elseif (($player1 == 'Scissors') && ($player2  == 'Paper') ) {
        echo "Player1 move is Scissors \n";
        echo "Player2 move is Paper \n";
        echo "player 1 wins \n";
        echo "player 2 loses \n";
        $player1Wins = true;
# Player1 move is 'Paper' and Player2 move is 'Rock'
    } elseif (($player1 == 'Paper') && ($player2  == 'Rock') ) {
        echo "Player1 move is Paper \n";
        echo "Player2 move is Rock \n";
        echo "player 1 Wins \n";
        $player1Wins = true;
        echo "player 2 Loses \n";
# Player1 move is 'Paper' and Player2 move is 'Scissors'
    } elseif (($player1 == 'Paper') && ($player2  == 'Scissors') ) {
        echo "Player1 move is Paper \n";
        echo "Player2 move is Scissors \n";
        echo "player 1 loses \n";
        echo "player 2 wins \n";
        $player2Wins = true;
    }
}
#
*/
#
# The output of the game will be displayed 
/* Dispkay the Results
HERE
Check if Player1Wins or Player2Wins!
if PlayerWins == true {
    echo "Player1 wins";
    echo "Player2 loses";
} else if Player2Wins == true {
    echo "Player1 loses";
    echo "Player2 wins";
}

*/

 ?>