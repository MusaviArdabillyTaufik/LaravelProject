<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Users;
use DB;

class Member extends Controller
{
    public function index()
    {
    	$table = 'users';
    	$showmember = Users::all();
    	return view('members')->with('member', $showmember);

    	// return view ('members', compact('table', 'fillable'));

        // $members = DB::table('users')->get();
        // // dump($members);
        // return view('members', ['users' => $members]);
    }
}
