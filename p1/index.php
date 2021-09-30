<?php

# include view
 require 'index-view.php';
#
# Define two arrays for the moves of both players - Player1 & Player2
$playerA=array("Rock","Paper","Scissors");
$playerB=array("Rock","Paper","Scissors");
# Generate a randon key for both players to pick their move
$playerA_move = $playerA[rand(0,2)];
$playerB_move = $playerB[rand(0,2)];
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

$playerA_Wins = false;
$playerB_Wins = false;
$winner = "";
#
# Game Logic begins with check if their moves are equal, then it will be a 'tie'
#
if ($playerA_move == $playerB_move)
{
echo "tied \n", PHP_EOL;
echo $playerA_move, PHP_EOL;
echo $playerB_move, PHP_EOL;
}
else {
    echo $playerA_move, PHP_EOL;
    echo $playerB_move, PHP_EOL;
    echo "no match!!", PHP_EOL;
# playerA move is 'Rock' and PlayerB move is 'Scissors'
    if (($playerA_move == 'Rock') && ($playerB_move == 'Scissors')) {
        echo "PlayerA move is Rock \n";
        echo "PlayerB move is Scissors \n";
        echo "Player A wins \n";
        echo "Player B loses \n";
        $playerA_Wins = true;
# playerA move is 'Rock' and PlayerB move is 'Paper'
    } elseif (($playerA_move == 'Rock') && ($playerB_move == 'Paper')) {
        echo "PlayerA move is Rock \n";
        echo "PlayerB move is Paper \n";
        echo "Player A loses \n";
        echo "Player B wins \n";
        $playerB_Wins = true;
# PlayerA move is 'Scissors' and PlayerB move is 'Rock'
    } elseif (($playerA_move == 'Scissors') && ($playerB_move  == 'Rock') ) {
        echo "PlayerA move is Scissors \n";
        echo "PlayerB move is Rock \n";
        echo "player A loses \n";
        echo "player B wins \n";
        $playerB_Wins = true;
# PlayerA move is 'Scissors' and PlayerB move is 'Paper'
    } elseif (($playerA_move == 'Scissors') && ($playerB_move  == 'Paper') ) {
        echo "PlayerA move is Scissors \n";
        echo "PlayerB move is Paper \n";
        echo "player A wins \n";
        echo "player B loses \n";
        $playerA_Wins = true;
# PlayerA move is 'Paper' and PlayerB move is 'Rock'
    } elseif (($playerA_move == 'Paper') && ($playerB_move  == 'Rock') ) {
        echo "PlayerA move is Paper \n";
        echo "PlayerB move is Rock \n";
        echo "player A Wins \n";
        $playerA_Wins = true;
        echo "player B Loses \n";
# PlayerA move is 'Paper' and PlayerB move is 'Scissors'
    } elseif (($playerA_move == 'Paper') && ($playerB_move  == 'Scissors') ) {
        echo "PlayerA move is Paper \n";
        echo "PlayerB move is Scissors \n";
        echo "player A loses \n";
        echo "player B wins \n";
        $playerB_Wins = true;
    }
}
#
#
#
# The output of the game will be displayed 

#Check if PlayerA_Wins or PlayerB_Wins!
if ($playerA_Wins == true) {
    echo "PlayerA wins";
    echo "PlayerB loses";
    $winner = "PlayerA";
} else if ($playerB_Wins == true) {
    echo "PlayerA loses";
    echo "PlayerB wins";
    $winner = "Player B";
}


 ?>