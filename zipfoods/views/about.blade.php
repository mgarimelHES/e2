@extends('templates/master')

@section('title')
About
@endsection

@section('head')
<link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')
<h1>About</h1>
Your local city is {{ $city }} and your local otime is {{ $time }}.
<h2>ZipFoods is your one-stop-shop for convenient online grocery shopping in the greater {{ $city }} area.</h2>

@endsection