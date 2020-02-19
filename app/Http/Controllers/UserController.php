<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Auth;

class UserController extends Controller
{
    public function loginform(){
    	return view('loginForm');
    }

    public function login(Request $request){
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/members');
    	}
    	//dd('salah');
    	return redirect('/loginForm')->with('login_failed','Invalid email or password');
    }

 //    public function register() {
	// 	$user = User::all();
	// 	return view('createLog', compact('user'));
	// }

	public function registerForm(){
    	return view('registerForm');
    }

	public function register(Request $request) {
		$this->validate($request, [
				'name'     => 'required',
				'email' => 'required',
				'password' => 'required'
			]);

		// $user           = new User;
		// $user->name     = $request->name;
		// $user->email 	= $request->email;
		// $user->password = bcrypt($request->password);
		// $user->save();

		User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
		// dd($request->all());
		return redirect('/loginForm');
	}

	public function logout() {
		Auth::logout();
		return redirect('loginForm');
	}
}
