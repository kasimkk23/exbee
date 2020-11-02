@extends('layouts.layout')

@section('content')
<div class="school">
        <img src="/img/icon1.png" alt="" width="90px" style="margin-left: 100px;">
    <div class="school__container">
        
        <div class="school__container--left">
        <div class="school__circles">
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="school__circle-1"></a>
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="school__circle-2"></a>
                <a href=""><img src="/img/circle-1.png" alt="" width="45" class="school__circle-3"></a>
            </div>
        <img src="/img/play-sides-main.png" alt="" class="school__container--img1">
        </div>
        <div class="school__container--right">
            <img src="/img/log.png" alt="" class="school__container--img2">
        </div>
    </div>
</div>
@endsection('content')