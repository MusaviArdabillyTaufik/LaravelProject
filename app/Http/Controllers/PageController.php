<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Users;
use App\Members;

class PageController extends Controller
{
    // public function myProfile(){
    //     return view('userview.profile.userprofileview');
    // }

    public function landingPage(){
        return view('index');
    }

    public function csgo(){
    	return view('csgoview');
    }

    public function pubg(){
    	return view('pubgview');
    }

    public function loginform(){
    	return view('loginForm');
    }

    public function registerForm(){
    	return view('registerForm');
    }


    public function addMemberForm(){
        return view('addMemberForm');
    }

    public function editMemberForm($id){
        $user = Members::find($id);
        return view('editMemberForm', ['user' => $user]);
    }

    public function profile(){
        return view('userview.profile.userprofileview', array('user' => Auth::user()));
    }

    public function editprofile(){
        return view('userview.profile.usereditprofileview', array('user' => Auth::user()));
    }

    public function csgohome(){
        return view('userview.csgo.csgohomeview');
    }

    public function csgoplayers(Request $request){
        $showmember = Members::when($request->searchInput, function ($query) use ($request) {
                  $query->where('name', 'LIKE', "%{$request->searchInput}%")
                        ->orWhere('code', 'LIKE', "%{$request->searchInput}%")
                        ->orWhere('rank', 'LIKE', "%{$request->searchInput}%");
                  })->paginate(5);
        return view('userview.csgo.csgoplayersview')->with('member', ($showmember));
    }
    
    public function pubghome(){
        return view('userview.pubg.pubghomeview');
    }

    public function pubgplayers(){
        return view('userview.pubg.pubgplayersview');
    }
}
