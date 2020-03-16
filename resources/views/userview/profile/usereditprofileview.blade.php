@extends('layouts.main')

@section('content')

    <div class="bgprofile-top">
       
    </div>
    <div class="bgprofile-bottom">

        <form method="POST" action="/saveeditprofile/{{ $user->id }}" enctype="multipart/form-data">
                    @csrf
            <div class="editprofile-container">
            
                <img src="/uploads/{{ $user->Members->avatar }}">

                <h1>PERSONAL INFO</h1>
                <p>There's nothing basic about you except this info.</p>
                <h2>Name</h2>
                <input type="text" name="main_name" value="{{ $user->Members->name }}">
                <h2>Age</h2>
                <input type="text" name="age" value="{{ $user->Members->age }}">
                <h2>Gender</h2>
                <select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <h2>Language</h2>
                <select name="language">
                    <option value="English">English</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="India">India</option>
                    <option value="Russian">Russian</option>
                    <option value="China">China</option>
                </select>
                <h2>Additiional Information</h2>
                <input type="text" name="additional_info" value="{{ $user->Members->additional_info }}">
                <h2>Profile Picture</h2>
                <input type="file" name="avatarinput">

                <h1>CS:GO</h1>
                <p>There's nothing basic about you except this info.</p>
                <h2>Nickname</h2>
                <input type="text" name="csgo_name" value="{{ $user->Members->Csgo->name }}">
                <h2>Main Role</h2>
                <!-- <input type="text" name="main_role1" value="{{ $user->Members->Csgo->main_role1 }}"> -->
                <!-- <select id="paket1" name="main_role[]" multiple="multiple" value="{{ $user->Members->Csgo->name }}">
                    <option value=""></option>
                    <option value="awper.png">AWPER</option>
                    <option value="bomber.png">BOMBER</option>
                    <option value="support.png">SUPPORT</option>
                </select> -->
                <input type="checkbox" name="main_role1" value="awper.png">AWPER
                <input type="checkbox" name="main_role2" value="bomber.png">BOMBER
                <input type="checkbox" name="main_role3" value="support.png">SUPPORT
                <h2>Tactical Role</h2>
                <!-- <input type="text" name="tactical_role1" value="{{ $user->Members->Csgo->tactical_role1 }}"> -->
                <!-- <select id="paket2" name="tactical_role[]" multiple="multiple">
                    <option value=""></option>
                    <option value="entry.png">ENTRY</option>
                    <option value="ninja.png">NINJA</option>
                    <option value="nader.png">NADER</option>
                </select> -->
                <input type="checkbox" name="tactical_role1" value="entry.png">ENTRY
                <input type="checkbox" name="tactical_role2" value="ninja.png">NINJA
                <input type="checkbox" name="tactical_role3" value="nader.png">NADER
                <h2>Rank</h2>
                <select name="rank">
                    <option value="silver1.png">SILVER 1</option>
                    <option value="silver2.png">SILVER 2</option>
                    <option value="silver3.png">SILVER 3</option>
                    <option value="silver4.png">SILVER 4</option>
                    <option value="silver_elite_master.png">SILVER ELITE MASTER</option>
                    <option value="gold_nova1.png">GOLD NOVA 1</option>
                    <option value="gold_nova2.png">GOLD NOVA 2</option>
                    <option value="gold_nova3.png">GOLD NOVA 3</option>
                    <option value="gold_nova_master.png">GOLD NOVA MASTER</option>
                    <option value="master_guardian1.png">MASTER GUARDIAN 1</option>
                    <option value="master_guardian2.png">MASTER GUARDIAN 2</option>
                    <option value="master_guardian_elite.png">MASTER GUARDIAN ELITE</option>
                    <option value="distinguished_master_guardian.png">DISTINGUISHED MASTER GUARDIAN</option>
                    <option value="legendary_eagle.png">LEGENDARY EAGLE</option>
                    <option value="legendary_eagle_master.png">LEGENDARY EAGLE MASTER</option>
                    <option value="supreme_master_first_class.png">SUPREME MASTER FIRST CLASS</option>
                    <option value="the_global_elite.png">THE GLOBAL ELITE</option>
                </select>
                <h2>Friend Code</h2>
                <input type="text" name="friend_code" value="{{ $user->Members->Csgo->friend_code }}">
                <h2>Server Region</h2>
                <select name="server_region">
                    <option value="english">English</option>
                    <option value="singapore">Singapore</option>
                    <option value="india">India</option>
                    <option value="russian">Russian</option>
                    <option value="hongkong">Hongkong</option>
                </select>

                <input type="submit" value="save">

            

                <!-- <h1>CS:GO</h1>
                <p>There's nothing basic about you except this info.</p>
                <h2>Nickname</h2>
                <input type="text" name="name" value="{{ $user->Members->Csgo->rank }}">
                <h2>Main Role</h2>
                <div class="editprofile-role-container">
                    <div class="editprofile-role-wrapper">
                        <label>
                            <input type="checkbox" value="silver1">AWPer</input>
                        </label>
                        <label>
                            <input type="checkbox" value="silver2">Support</input>
                        </label>
                    </div>
                    <div class="editprofile-role-wrapper">
                        <label>
                            <input type="checkbox" value="silver3">Bomber</input>
                        </label>
                        <label>
                            <input type="checkbox" value="silver4">Baiter</input>                    
                        </label>
                    </div>
                </div>
                <h2>Tactical Role</h2>
                <div class="editprofile-role-container">
                    <div class="editprofile-role-wrapper">
                        <label>
                            <input type="checkbox" value="silver1">Leader</input>
                        </label>
                        <label>
                            <input type="checkbox" value="silver2">Entry</input>
                        </label>
                    </div>
                    <div class="editprofile-role-wrapper">
                        <label>
                            <input type="checkbox" value="silver3">Nader</input>
                        </label>
                        <label>
                            <input type="checkbox" value="silver4">Ninja</input>                    
                        </label>
                    </div>
                </div>
                <h2>Rank</h2>
                <select name="rank">
                    <option value="silver1">silver 1</option>
                    <option value="silver2">silver 2</option>
                    <option value="silver3">silver 3</option>
                    <option value="silver4">silver 4</option>
                </select>
                <h2>Server Region</h2>
                <select name="rank">
                    <option value="hongkong">Hongkong</option>
                    <option value="singapore">Singapore</option>
                    <option value="europe">Europe</option>
                    <option value="japan">Japan</option>
                </select> -->

                <!-- <button><a href="/saveeditprofile">SAVE CHANGES</a></button> -->







                <!-- <h2>{{ $user->name }}</h2>
                <h3>{{ $user->Members->code }}</h3>
                <div class="gender-lang">
                    <span>
                        <i class="fa fa-mars mr-4" aria-hidden="true"><p>21 y.o.</p></i>
                        <i class="fa fa-language" aria-hidden="true"><p>EN, ID</p></i>
                    </span>
                </div>
                <div class="information">
                    Welcome to my RedAlert Profile. I can update this quote just haven’t yet.
                </div>
                <button class="btn-editprofile"><a href="/editprofile">EDIT PROFILE</a></button> -->
                
            
            <!--  -->
            </div>
        </form>
    </div>

@stop