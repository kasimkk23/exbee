@extends('layouts.layout')

@section('lobby')
<div class="lobby">
    <div class="lobby__container">
        <div class="lobby__container--left">
        <img src="/img/lobby-1.jpg" alt="" class="lobby__container--img1">
            <div class="lobby__circles">
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="lobby__circle-1"></a>
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="lobby__circle-2"></a>
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="lobby__circle-3"></a>
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="lobby__circle-4"></a>
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="lobby__circle-5"></a>
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="lobby__circle-6"></a>
            </div>
        </div>
        <div class="lobby__container--right">
            <img src="/img/lobby-2.jpg" alt="" class="lobby__container--img2">
            <div class="lobby__icons">
                <a href=""><img src="/img/icon-1.png" alt="" class="lobby__icon-1"></a>
                <a href=""><img src="/img/icon-2.png" alt="" class="lobby__icon-2"></a>
                <a href=""><img src="/img/icon-3.png" alt="" class="lobby__icon-3"></a>
                <a href=""><img src="/img/icon-4.png" alt="" class="lobby__icon-4"></a>
            </div>
        </div>
    </div>
</div>
@endsection('lobby')