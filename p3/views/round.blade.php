@extends('templates/master')

@section('title')
    Game Round Details
@endsection

@section('content')
    <h2>Game Round Detail</h2>
    <ul>
        <li>Round Id: {{ $round['id'] }} </li>
        <li>Player's Selection: {{ $round['selection'] }} </li>
        <li>Winner is: {{ $round['winner'] }} </li>
        <li>TimeStamp: {{ $round['timestamp'] }} </li>
    </ul>
    <a href='/history'>Back to the Game History</a>
@endsection
