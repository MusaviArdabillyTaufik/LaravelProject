@extends('layouts.main')

@section('content')

    <div class="bgprofile-top">
        
    </div>
    <div class="bgprofile-bottom">
        <div class="profile-container">
            <div class="profile-main">
                <img src="/uploads/{{ $user->Members->avatar }}" class="img-profile">
                <h2>{{ $user->Members->name }}</h2>
                <h3>{{ $user->Members->code }}</h3>
                <div class="gender-lang">
                    <span>
                        <i class="fa fa-mars mr-4" aria-hidden="true"><p>{{ $user->Members->age }} y.o.</p></i>
                        <i class="fa fa-language" aria-hidden="true"><p>{{ $user->Members->language }}</p></i>
                    </span>
                </div>
                <div class="information">
                    {{ $user->Members->additional_info }}
                </div>
                <button class="btn-editprofile"><a href="/editprofile">EDIT PROFILE</a></button>
                
            </div>
            <div class="profile-extend">
                <h2>CS:GO</h2>
                <div class="gameprofile-container">
                    <div class="gameprofile-header">
                        <div class="name-rank">
                            <h3>{{ $user->Members->Csgo->name }}</h3>
                            <img src="assets\img\rank\{{ $user->Members->Csgo->rank }}" onerror="this.style.display='none'">
                        </div>
                        <!-- <div class="friend-code">
                            <h4>{{ $user->Members->Csgo->friend_code }}</h4>
                        </div> -->
                        <div class="server">
                            <p>{{ $user->Members->Csgo->server_region }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="role-container">
                        <div class="mainrole-wrapper">
                            <h4>Main</h4>
                            <div class="mainrole-wrapper-img">
                                <img src="assets\img\role\{{ $user->Members->Csgo->main_role1 }}" onerror="this.style.display='none'">
                                <img src="assets\img\role\{{ $user->Members->Csgo->main_role2 }}" onerror="this.style.display='none'">
                                <img src="assets\img\role\{{ $user->Members->Csgo->main_role3 }}" onerror="this.style.display='none'">
                            </div>
                        </div>
                        <div class="tacticalrole-wrapper">
                            <h4>Tactical</h4>
                            <div class="tacticalrole-wrapper-img">
                                <img src="assets\img\role\{{ $user->Members->Csgo->tactical_role1 }}" onerror="this.style.display='none'">
                                <img src="assets\img\role\{{ $user->Members->Csgo->tactical_role2 }}" onerror="this.style.display='none'">
                                <img src="assets\img\role\{{ $user->Members->Csgo->tactical_role3 }}" onerror="this.style.display='none'">
                            </div>
                        </div>
                    </div><br>
                    <div class="friend-code">
                        <h4>Friend Code</h4>
                        <h5>{{ $user->Members->Csgo->friend_code }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
  <!-- Header -->
  <!-- <header class="bgmain head">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 ">WEED FOR FUN</h1><br>
        <h1 class="mx-auto my-0 ">WEED FOR MONEY</h1><br>
        <h1 class="mx-auto my-0 ">WEED FOR FUTURE</h1><br>
        <a href="/members" class="btn js-scroll-trigger btn-home">JOIN</a><br>
        <h2>Choose Your Game</h2>
        <div>
            <div class="home-button">
                <img class="btn-game-index" src="/assets/img/csgo.jpg">
                <a href="/csgo"><img class="btn-game-index home-hover" src="/assets/img/csgohover.png"></a>
            </div>
            <div class="home-button">
                <img class="btn-game-index" src="/assets/img/pubg.jpg">
                <a href="/pubg"><img class="btn-game-index home-hover" src="/assets/img/pubghover.png"></a>
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
  </header> -->

@stop