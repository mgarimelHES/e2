<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/" to go to home page
     */
    public function index()
    {
        
        $selection = $this->app->old('selection');
        $computerMove = $this->app->old('computerMove');
        $winner = $this->app->old('winner');

        return $this->app->view('index', [
            'selection' => $selection,
            'computerMove' => $computerMove,
            'winner' => $winner
        ]);
    }
    /**
     * The main game ruless will be processed after the validation of required player move
     */
    public function process() 
    {
        #  Simple Validation as a part of the input from the player by choosing the selection of rock, paper or scissors
        $this->app->validate([
            'selection' => 'required'
        ]);
        
        //dump($this->app->inputAll());
        #
        # Player1 will take user input and Player2 will be simulating a computer pick with random pick from an array of RPS moves
        #
        $playerMove = $this->app->input('selection');  #Player Selection
        $computerMove = ['Rock', 'Paper', 'Scissors'][rand(0,2)]; # random computer move
        #
        # Call User defined function to check the both moves to decide the winner if any
        #
        $winner = $this->compareMoves($playerMove, $computerMove);
        
        # Persist the game outcome to a database here!
        # 
        $this->app->db()->insert('rounds', [
            'selection' => $playerMove,
            'winner' => $winner,
            'timestamp' => date('Y-m-d H:i:s')

        ]);

        return $this->app->redirect('/', ['selection' => $playerMove, 'computerMove' => $computerMove, 'winner' => $winner]);
    }
    /**
     * User Defined function to compare the player and computer moves
     */
     function compareMoves($player, $computer)
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
     /**
     * User Defined function to get all the game results to display on the 'history' page
     */
    public function history() {
        
        $rounds = $this->app->db()->all('rounds');
        //dump($rounds);

        return $this->app->view('history',['rounds' => $rounds]);
    }
    /**
     * User Defined function to get details of a specific game round and display on the 'round' page
     */
    public function round() {

        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);
        //dump($round);

        return $this->app->view('round', ['round' => $round]);
    }
}