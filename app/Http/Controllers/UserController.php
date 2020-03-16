<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Steam_member;
use \App\Members;
use \App\User;
use \App\Csgos;
use Auth;

class UserController extends Controller
{
    // public function loginform(){
    // 	return view('loginForm');
    // }

    public function login(Request $request){
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/');
    	}
    	//dd('salah');
    	return redirect('/loginForm')->with('login_failed','Invalid email or password');
    }

 	//  public function register() {
	// 	$user = User::all();
	// 	return view('createLog', compact('user'));
	// }

	// public function registerForm(){
 	//    return view('registerForm');
 	// }

 	// public function add_steam($nama){
 		// Steam_member::create([
   //      	'name' => $nama
   //      ]);
  //       return redirect('/loginForm');
 	// }

 	public function sub_register($id, $nama, $id_steam, $id_csgo){
 		
        Members::create([
            'name' => $nama,
            'avatar' => 'defaultava.png',
        	'id_user' => $id,
        	'id_steam' => $id_steam,
        	'id_csgo' => $id_csgo
        ]);
        // return $this->add_steam($nama);
		return redirect('/loginForm');
		// dd($id, $nama);
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

        Steam_member::create([
        	'name' => $request->name,
        ]);

        Csgos::create([
        	'name' => $request->name
        ]);

        $id_steam = DB::table('steam_members')->where('name', $request->name)->value('id');
        $id_csgo = DB::table('csgos')->where('name', $request->name)->value('id');
		$id = DB::table('users')->where('name', $request->name)->value('id');
		$nama = $request->name;
        
        // Steam_member::create([
        // 	'name' => $request->name
        // ]);
		// dd($request->all());
		// return redirect('/loginForm');
		return $this->sub_register($id, $nama, $id_steam, $id_csgo);
	}

	

	public function logout() {
		Auth::logout();
		return redirect('loginForm');
	}
}