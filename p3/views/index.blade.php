@extends('templates/master')

@section('content')

    <h2>Instructions</h2>
    <p> Choose a move - Rock, Paper or Scissors. Following the game rules - Rock beats Scissors, Scissors beat paper and
        Paper beats Rock, your
        move will be compared with random computer move and the winner will be decicded!</p>


    <form method='POST' action='/process'>
        <input type='radio' name='selection' value='rock' id='rock'><label for='rock'>Rock</label>
        <input type='radio' name='selection' value='paper' id='paper'><label for='paper'>Paper</label>
        <input type='radio' name='selection' value='scisoors' id='scissors'><label for='scissors'>Scissors</label>

        <button type='submit'>Let's Play!</button>

    </form>
@endsection
