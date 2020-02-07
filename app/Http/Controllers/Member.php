<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        // dd($request->all());
        $this->validate($request,[
            'name' => 'required',
            'nim' => 'required',
            'faculty' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
        $ava = $request->file('avatar');
        $extension = $ava->getClientOriginalExtension();
        Storage::disk('public')->put($ava->getFilename().'.'.$extension,  File::get($ava));
        Users::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'faculty' => $request->faculty,
            'filename' => $ava->getFilename().'.'.$extension ]);

        return redirect('/members');
    }

    public function editMemberForm($id){
        $user = Users::find($id);
        return view('editMemberForm', ['user' => $user]);
    }

    public function editMember($id, Request $request){
        // dd($request->all());
        // dd($path);
        $this->validate($request,[
           'name' => 'required',
           'nim' => 'required',
           'faculty' => 'required',
           'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048']);

        $user = Users::find($id);
        if ($ava = $request->file('avatar')){
            $uploaded_ava = public_path("uploads/{$user->filename}"); // get image from folder

            if (File::exists($uploaded_ava)) { // remove image from folder
                unlink($uploaded_ava);
            }
            $destinationPath = 'uploads/'; // upload path
            $user_avatar = date('YmdHis') . "." . $ava->getClientOriginalExtension();
            $ava->move($destinationPath, $user_avatar);
            $insert['filename'] = "$user_avatar";

            $user->name = $request->name;
            $user->nim = $request->nim;
            $user->faculty = $request->faculty;
            $user->filename = $insert['filename'] = "$user_avatar";
        }
            $user->save();
        return redirect('/members');
    }

    public function deleteMember($id)
    {   
        $avatar = Users::where('id',$id)->first();
        File::delete('uploads/'.$avatar->filename);

        $user = Users::find($id);
        $user->delete();
        return redirect('/members');
    }


}