@extends('layouts.layout')

@section('content')
<div class="hero">
    <div class="hero__container">
    <div class="hero__container--left">
        <h2>Welcome to</h2>
        <h2>IWIS Workshop</h2>
        <p>Impedance Spectroscopy is an important measurement method in many 
            applications fields such as electrochemistry etc</p>
        <button class="hero__container--btn">
            <a href="{{ route('lobby') }}"> Visit Lobby</a>
        </button>
    </div>
    <div class="hero__container--right">
        <a href="{{ route('lobby') }}"><img src="/img/tu.jpg" alt="" class="hero__container--img"></a>
    </div>
    </div>
</div>
@endsection('content')