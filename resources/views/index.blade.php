@extends('layouts.main')

@section('content')
 
  <header class="bgmain head">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 ">GAME FOR FUN</h1><br>
        <h1 class="mx-auto my-0 ">GAME FOR MONEY</h1><br>
        <h1 class="mx-auto my-0 ">GAME FOR FUTURE</h1><br>
        @if (Auth::guest()) 
        <a href="/registerForm" class="btn js-scroll-trigger btn-home">JOIN</a><br>
        @else
        <a href="/profile" class="btn js-scroll-trigger btn-home">PROFILE</a><br>
        @endif
        <h2>Choose Your Game</h2>
        <div>
            <div class="home-button">
                <img class="btn-game-index" src="/assets/img/csgo.jpg">
                @if (Auth::guest()) 
                <a href="/csgo"><img class="btn-game-index home-hover" src="/assets/img/csgohover.png"></a>
                @else
                <a href="/csgo/home"><img class="btn-game-index home-hover" src="/assets/img/csgohover.png"></a>
                @endif
            </div>
            <div class="home-button">
                <img class="btn-game-index" src="/assets/img/pubg.jpg">
                @if (Auth::guest())
                <a href="/pubg"><img class="btn-game-index home-hover" src="/assets/img/pubghover.png"></a>
                @else
                <a href="/pubg/home"><img class="btn-game-index home-hover" src="/assets/img/pubghover.png"></a>
                @endif
            </div>
        </div>
        <div>
            <div class="home-icon">
                <img class="btn-game-index" src="/assets/img/findmate.png">
                <h3>FIND MATES</h3>
            </div>
            <div class="home-icon">
                <img class="btn-game-index" src="/assets/img/practice.png">
                <h3>TEAM UP</h3>
            </div>
            <div class="home-icon">
                <img class="btn-game-index" src="/assets/img/teamup.png">
                <h3>PRACTICE</h3>
            </div>
        </div>
      </div>
    </div>
  </header>

@stop