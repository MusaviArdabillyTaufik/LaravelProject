<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Member extends Controller
{
    public function index()
    {
        $members = DB::table('users')->get();
        // dump($members);
        return view('members', ['users' => $members]);
    }
}
