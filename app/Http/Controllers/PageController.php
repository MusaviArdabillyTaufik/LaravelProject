<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Members;

class PageController extends Controller
{
    public function landingPage(){
        $table = 'members';
        $showmember = Members::all();
        return view('index', compact('showmember'));
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
}
