<?php
#
# Get player pick
#
$player_move = $_POST['userPick'];
#
# Define one array with the moves of the computer
# Player1 will take user input and Player2 will be simulating a computer pick with random pick from an array
#
$computer_move = ['Rock', 'Paper', 'Scissors'][rand(0,2)];
#
# Set initial values for Game winner boolean type
#
$player_Wins = false;
$computer_Wins = false;
#
/*
Follow these game rules -
- If both players 'moves' are equal, the game is tied. 
- Otherwise winner is decided using the  rule 'Rock beats Scissors, Scissors beats Paper and Paper beats Rock'.
-
*/ 
#
# Call User defined function to check the both moves to decide the  winner if any
#
 $win = check_moves($player_move, $computer_move);
#  
#
if  ($win == 'Player') {
    $player_Wins = true;
}
else if ($win == 'Computer') {
    $computer_Wins = true;
} else if  ($win == 'Tied') {
    $tied = true;
}
# Store the session with the required information to display 
#
session_start();
$_SESSION['results'] = [
    'win' => $win,
    'computerPick' => $computer_move,
    'userPick' => $player_move
];
#
# The output of the game will be displayed with winner information and each player's move
#Check if Player_Wins or Computer_Wins!
#

if ($player_Wins == true) {
    $win = "You";
} else if ($computer_Wins == true) {
    $win = "Computer";
} else if (($player_Wins == false and $computer_Wins == false) and ($win = "Tied")) {
    $win = 'Tied';
};
#
# User Defined function to compare the player and computer moves
#
function check_moves($player, $computer) {
# Define variabel to track the winner if any, otherwise it will be a tie!
    $win = '';
#
# Game Logic begins with check if their moves are equal, then it will be a 'tie'
#    
    if ($player == $computer) 
    {
    $win = 'Tied';
    }
# player move is 'Rock' and Computer move is 'Scissors'
    elseif (($player == 'Rock') && ($computer == 'Scissors')) {
        $win='Player';
# player move is 'Rock' and Computer move is 'Paper'
    } elseif (($player == 'Rock') && ($computer == 'Paper')) {
        $win='Computer';
# Player move is 'Scissors' and Computer move is 'Rock'
    } elseif (($player == 'Scissors') && ($computer  == 'Rock') ) {
        $win ='Computer';
# Player move is 'Scissors' and Computer move is 'Paper'
    } elseif (($player == 'Scissors') && ($computer  == 'Paper') ) {
        $win = 'Player';
# Player move is 'Paper' and Computer move is 'Rock'
    } elseif (($player == 'Paper') && ($computer  == 'Rock') ) {
        $win = 'Player';
# Player move is 'Paper' and Computer move is 'Scissors'
    } elseif (($player == 'Paper') && ($computer  == 'Scissors') ) {
        $win = 'Computer';
    }
   return $win;
}
# include view to display the results of the game
require 'index-view.php';