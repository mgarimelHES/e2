@extends('templates/master')

@section('content')

    <h2>Instructions</h2>
    <p class='step1'> Make your selection - Rock, Paper or Scissors. </p>
    <p class='step2'>The Game rules - Rock beats Scissors, Scissors beat Paper and Paper beats Rock.</p>
    <p class='step3'> Your selection will be compared with random computer move and the winner will be decicded based on
        the game rules!</p>


    <form method='POST' action='/process'>
        <input type='radio' test='rock-option' name='selection' value='Rock' id='rock'><label for='rock'><img
                src='/images/rock.PNG'></label>
        <input type='radio' test='paper-option' name='selection' value='Paper' id='paper'><label for='paper'><img
                src='/images/paper.PNG'></label>
        <input type='radio' test='scissors-option' name='selection' value='Scissors' id='scissors'><label
            for='scissors'><img src='/images/scissors.PNG'></label>

        <button test='submit-button' type='submit'>Let's Play!</button>

    </form>

    @if ($app->errorsExist())
        <ul test='validation-output' class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if ($selection)
        <link href='/css/p3.css' rel='stylesheet'>

        <p><span class='outcome'>Game Results</span></p>

        <div test='results-output' class='results'>
            <p>Your selection is <span test='player-move'>{{ $selection }}</span> and the computer move is <span
                    test='computer-move'>{{ $computerMove }}</span>.</p>

            @if ($winner == 'Tied')
                <span test='tie-outcome' class='tie'>Game is Tied!! Do you want to play again?</span>
            @elseif ($winner == 'Player')
                <span test='won-outcome' class='won'>Congratulations! You won the game!!</span>
            @elseif ($winner == 'Computer')
                <span test='lost-outcome' class='lost'>Sorry, you lost the game. Please try again.</span>
            @endif

        </div>

    @endif

    <a href='/history'>Game History</a>

@endsection
