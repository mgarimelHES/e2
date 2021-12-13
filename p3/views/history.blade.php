@extends('templates/master')

@section('title')
    Game History
@endsection

@section('content')
    <h2>Game History</h2>
    <a href='/'>Back to Home</a>
    <ul>
        @foreach ($rounds as $round)

            <li><a test='round-results' href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></li>

        @endforeach
    </ul>

@endsection
