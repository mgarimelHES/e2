@extends('templates/master')

@section('title')
    Round History
@endsection

@section('content')
    <h2>Round History</h2>
    <ul>
        @foreach ($rounds as $round)
            <li><a href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></li>


        @endforeach
    </ul>

    <a href='/'>Back to Home</a>
@endsection
