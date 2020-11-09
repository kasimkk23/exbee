@extends('layouts.layout')

@section('content')
<div class="school">
    <div class="school__container">
        <div class="school__container--left">
        <div class="school__circles">
            <a href=""><img src="/img/circle-1.png" alt="" width="50" class="school__circle-1"></a>
            <a href=""><img src="/img/circle-1.png" alt="" width="50" class="school__circle-2"></a>
            <a href=""><img src="/img/circle-1.png" alt="" width="50" class="school__circle-3"></a>
        </div>
        <img src="/img/play-sides-main.jpg" width="900px" height="auto" alt="" class="school__container--img1">
        </div>
        <div class="school__container--right">
            <img src="/img/log.jpg" width="900px" height="auto" alt="" class="school__container--img2">
        </div>
    </div>
</div>
@endsection('content')