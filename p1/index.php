<?php
#
# Define two arrays for the moves of both players - Player1 & Player2
$playerA=array("Rock","Paper","Scissors");
$playerB=array("Rock","Paper","Scissors");
# Generate a randon key for both players to pick their move
$playerA_move = $playerA[rand(0,2)];
$playerB_move = $playerB[rand(0,2)];
/*
Follow these game rules -
- If both players 'moves' are equal, the game is tied. 
- Otherwise winner is decided using the  rule 'Rock beats Scissors, Scissors beats Paper and Paper beats Rock'.
-
*/ 
# Set initial values for Game winner boolean type and winner variable

$playerA_Wins = false;
$playerB_Wins = false;
$winner = "";
#
# Game Logic begins with check if their moves are equal, then it will be a 'tie'
#
if ($playerA_move == $playerB_move)
{
$winner = "Game is tied";
}
else {
 # playerA move is 'Rock' and PlayerB move is 'Scissors'
    if (($playerA_move == 'Rock') && ($playerB_move == 'Scissors')) {
        $playerA_Wins = true;
# playerA move is 'Rock' and PlayerB move is 'Paper'
    } elseif (($playerA_move == 'Rock') && ($playerB_move == 'Paper')) {
        $playerB_Wins = true;
# PlayerA move is 'Scissors' and PlayerB move is 'Rock'
    } elseif (($playerA_move == 'Scissors') && ($playerB_move  == 'Rock') ) {
        $playerB_Wins = true;
# PlayerA move is 'Scissors' and PlayerB move is 'Paper'
    } elseif (($playerA_move == 'Scissors') && ($playerB_move  == 'Paper') ) {
        $playerA_Wins = true;
# PlayerA move is 'Paper' and PlayerB move is 'Rock'
    } elseif (($playerA_move == 'Paper') && ($playerB_move  == 'Rock') ) {
        $playerA_Wins = true;
# PlayerA move is 'Paper' and PlayerB move is 'Scissors'
    } elseif (($playerA_move == 'Paper') && ($playerB_move  == 'Scissors') ) {
        $playerB_Wins = true;
    }
}
#
#
# The output of the game will be displayed with winner information and each player's move

#Check if PlayerA_Wins or PlayerB_Wins!
if ($playerA_Wins == true) {
    $winner = "Player A";
} else if ($playerB_Wins == true) {
    $winner = "Player B";
}
# include view to display the results of the game
require 'index-view.php';