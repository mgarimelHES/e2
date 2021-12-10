@extends('templates/master')

@section('content')

    <h2>Instructions</h2>
    <p> Choose a move - Rock, Paper or Scissors. Following the game rules - Rock beats Scissors, Scissors beat paper and
        Paper beats Rock, your
        move will be compared with random computer move and the winner will be decicded!</p>


    <form method='POST' action='/process'>
        <input type='radio' name='selection' value='Rock' id='rock'><label for='rock'>Rock</label>
        <input type='radio' name='selection' value='Paper' id='paper'><label for='paper'>Paper</label>
        <input type='radio' name='selection' value='Scisoors' id='scissors'><label for='scissors'>Scissors</label>

        <button type='submit'>Let's Play!</button>

    </form>

    @if ($selection)
        <div class='results'>
            The computer move is {{ $computer_move }}, your selection is {{ $selection }}

            @if ($winner == 'Tied')
                <span class='tie'>Game is Tied!! Do you want to play again?</span>
            @elseif ($winner == 'Player')
                <span class='won'>Congratulations! You won the game!</span>
            @else
                <span class='lost'>Sorry, you lost the game. Please try again.</span>
            @endif
        </div>

    @endif


@endsection
