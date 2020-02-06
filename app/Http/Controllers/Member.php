<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\DB;
use App\Users;
// use DB;

class Member extends Controller
{
    public function index(){
    	$table = 'users';
    	$showmember = Users::all();
    	return view('members')->with('member', $showmember);

    	// return view ('members', compact('table', 'fillable'));

        // $members = DB::table('users')->get();
        // // dump($members);
        // return view('members', ['users' => $members]);
    }

    public function addMemberForm(){
        return view('addMemberForm');
    }

    public function addMember(Request $request){
    //     dd($request->all());
        $this->validate($request,[
            'name' => 'required',
            'nim' => 'required',
            'faculty' => 'required']);
        Users::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'faculty' => $request->faculty]);
        return redirect('/members');
    }

    // public function addMember(Request $request){
    //     // $member = new member;
    //     // $member->name = $request->name;
    //     // $member->nim = $request->nim;
    //     // $member->faculty = $request->faculty;
    //     // $member->save();
    //     // return redirect('members');
    // }

    public function editMemberForm($id){
        $user = Users::find($id);
        return view('editMemberForm', ['user' => $user]);
    }

    public function editMember($id, Request $request){
        $this->validate($request,[
           'name' => 'required',
           'nim' => 'required',
           'faculty' => 'required'
        ]);

        $user = Users::find($id);
        $user->name = $request->name;
        $user->nim = $request->nim;
        $user->faculty = $request->faculty;
        $user->save();
        return redirect('/members');
    }

    public function deleteMember($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect('/members');
    }


}
