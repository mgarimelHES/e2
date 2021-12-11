<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        
        $selection = $this->app->old('selection');
        $computer_move = $this->app->old('computer_move');
        $winner = $this->app->old('winner');

        return $this->app->view('index', [
            'selection' => $selection,
            'computer_move' => $computer_move,
            'winner' => $winner
        ]);
    }

    # 'Process method to run the game using the game rules 
    public function process() 
    {
        #  Simple Validation as a part of the input or setting a default value
        $this->app->validate([
            'selection' => 'required'
        ]);
        
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
        # Call User defined function to check the both moves to decide the winner if any
        #
        $winner = $this->check_moves($player_move, $computer_move);
        
        # Persist the game outcome to a database here!
        # todo
        $this->app->db()->insert('rounds', [
            'selection' => $selection,
            'winner' => $winner,
            'timestamp' => date('Y-m-d H:i:s')

        ]);

        return $this->app->redirect('/', ['selection' => $selection, 'computer_move' => $computer_move, 'winner' => $winner]);
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
    
    public function history() {
        
        $rounds = $this->app->db()->all('rounds');
        //dump($rounds);

        return $this->app->view('history',['rounds' => $rounds]);
    }

    public function round() {

        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);
        //dump($round);

        return $this->app->view('round', ['round' => $round]);
    }
}