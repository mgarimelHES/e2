<?php

class P3Cest
{
    public function playRPS(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        # EX- fill with player selection with one of the options - Rock, Paper or Scissors
        #
        #$I->fillField('[test=rock-option]', 'Rock');
        #$I->fillField('[test=rock-option]', 'Scissors');
        $I->fillField('[test=rock-option]', 'Paper');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-output]');
        #
        $move = $I->grabTextFrom('[test=computer-move]');
        $I->comment('The computer random move is:' .$move);
        $player_move = $I->grabTextFrom('[test=player-move]');
        #
        # If the player selection is Rock
        if ($player_move == 'Rock') 
        {
            if ($move == 'Scissors') {
                $I->seeElement('[test=won-outcome]');
            } elseif ($move =='Paper') {
                $I->seeElement('[test=lost-outcome]');
            } elseif ($move == 'Rock') {
                $I->seeElement('[test=tie-outcome]');
            }
        }
        # If the player selection is Paper
        if ($player_move == 'Paper') 
        {
            if ($move == 'Rock') {
                $I->seeElement('[test=won-outcome]');
            } elseif ($move =='Scissors') {
                $I->seeElement('[test=lost-outcome]');
            } elseif ($move == 'Paper') {
                $I->seeElement('[test=tie-outcome]');
            }
        }
        # If the player selection is Scissors
        if ($player_move == 'Scissors') 
        {
            if ($move == 'Paper') {
                $I->seeElement('[test=won-outcome]');
            } elseif ($move =='Rock') {
                $I->seeElement('[test=lost-outcome]');
            } elseif ($move == 'Scissors') {
                $I->seeElement('[test=tie-outcome]');
            }
        }
    }
    /**
     * Validation Testing
     */
        public function validateForm(AcceptanceTester $I) 
        {
            $I->amOnPage('/');
            $I->click('[test=submit-button]');
            $I->seeElement('[test=validation-output]');
        }
    /**
     * History testing
     */
    public function showsHistory(AcceptanceTester $I) 
    {
        $I->amOnPage('/history');

        $roundCount = count($I->grabMultiple('[test=round-results]'));
        $I->assertGreaterThanOrEqual(10, $roundCount);
        
    }
    /**
     * Round details testing
     */
    public function showsRoundDetails(AcceptanceTester $I) 
    {
        $I->amOnPage('/history');

        $timestamp = $I->grabTextFrom('[test=round-results]');
        $I->comment($timestamp);

        # select timestamp to see the round details
        $I->click($timestamp);
        
        #Assert
        $I->see($timestamp);
    }
}