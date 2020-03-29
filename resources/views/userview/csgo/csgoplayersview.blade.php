@extends('layouts.main')

@section('content')

    <div class="bgprofile-top">
        
    </div>
    <div class="bgprofile-bottom">
        <div class="csgoplayers-container">
            <div class="csgoplayers-wrapper">
                <h2>CS:GO</h2>
                @foreach($member as $tbl)
                <div class="gameprofile-container">
                    <div class="gameprofile-header">
                        <div class="name-rank">
                            <h3>{{ $tbl->Csgo->name }}</h3>
                            <img src="{{url('assets/img/rank/'.$tbl->Csgo->rank)}}" onerror="this.style.display='none'">
                        </div>
                        <div class="server">
                            <p>{{ $tbl->Csgo->server_region }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="role-container">
                        <div class="mainrole-wrapper">
                            <h4>Main</h4>
                            <div class="mainrole-wrapper-img">
                                <img src="{{url('assets/img/role/'.$tbl->Csgo->main_role1)}}" onerror="this.style.display='none'">
                                <img src="{{url('assets/img/role/'.$tbl->Csgo->main_role2)}}" onerror="this.style.display='none'">
                                <img src="{{url('assets/img/role/'.$tbl->Csgo->main_role3)}}" onerror="this.style.display='none'">
                            </div>
                        </div>
                        <div class="tacticalrole-wrapper">
                            <h4>Tactical</h4>
                            <div class="tacticalrole-wrapper-img">
                                <img src="{{url('assets/img/role/'.$tbl->Csgo->tactical_role1)}}" onerror="this.style.display='none'">
                                <img src="{{url('assets/img/role/'.$tbl->Csgo->tactical_role2)}}" onerror="this.style.display='none'">
                                <img src="{{url('assets/img/role/'.$tbl->Csgo->tactical_role3)}}" onerror="this.style.display='none'">
                            </div>
                        </div>
                    </div><br>
                    <div class="friend-code">
                        <h4>Friend Code</h4>
                        <h5>{{ $tbl->Csgo->friend_code }}</h5>
                    </div>
                </div>
        	@endforeach
            </div>
        </div>
    </div>

@stop