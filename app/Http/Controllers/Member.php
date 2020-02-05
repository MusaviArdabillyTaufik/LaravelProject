<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Users;

class Member extends Controller
{
    public function index()
    {
    	$table = 'users';
    	$fillable = Users::all();
    	return view ('members', compact('table', 'fillable'));


        // $members = DB::table('users')->get();
        // // dump($members);
        // return view('members', ['users' => $members]);
    }
}
