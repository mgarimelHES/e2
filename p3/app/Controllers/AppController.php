<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }

    # 'Process method to validate the game rules
    public function process() 
    {
        
        //dump($this->app->inputAll());
        $selection = $this->app->input('selection');     # Get player pick
        #
        $player_move = $this->app->input('selection'); 
        #
        # Define one array with the moves of the computer
        # Player1 will take user input and Player2 will be simulating a computer pick with random pick from an array
        #
        $computer_move = ['Rock', 'Paper', 'Scissors'][rand(0,2)];
        #
        dump($player_move);
        dump($computer_move);
        #
        # Call User defined function to check the both moves to decide the winner if any
        #
        //$winner = check_moves($player_move, $computer_move);
        
        $winner = callMe($player_move, $computer_move);
        #  
        dump($winner);
    }
# test
    function callMe($p, $c)
    {
        dump('I am in call me');
    }
#
# User Defined function to compare the player and computer moves
#
#
     function check_moves($player, $computer)
    {
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
    #
}