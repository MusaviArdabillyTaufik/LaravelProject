<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\DB;
use App\Users;
use App\Members;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
// use DB;

class Member extends Controller
{
    public function index(){
        // $table = 'users';
    	// $showmember = Users::all();
     //    $showmember = Users::paginate(15);
        $table = 'members';
        $showmember = Members::all();
        $showmember = Members::paginate(15);
        // $showmember = Users::where('id', Auth:: id())->paginate(5);
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
            'code' => 'required',
            'rank' => 'required',
            'avatarinput' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
        $ava = $request->file('avatarinput');
        $extension = $ava->getClientOriginalExtension();
        Storage::disk('public')->put($ava->getFilename().'.'.$extension,  File::get($ava));
        Members::create([
            'name' => $request->name,
            'code' => $request->code,
            'rank' => $request->rank,
            'avatar' => $ava->getFilename().'.'.$extension ]);

        return redirect('/members');
    }

    public function editMemberForm($id){
        $user = Members::find($id);
        return view('editMemberForm', ['user' => $user]);
    }

    public function editMember($id, Request $request){
        // dd($request->all());
        // dd($path);
        $this->validate($request,[
           'name' => 'required',
           'code' => 'required',
           'rank' => 'required',
           'avatarinput' => 'required|image|mimes:jpeg,png,jpg|max:2048']);

        $user = Members::find($id);
        if ($ava = $request->file('avatarinput')){
            $uploaded_ava = public_path("uploads/{$user->avatar}"); // get image from folder

            if (File::exists($uploaded_ava)) { // remove image from folder
                unlink($uploaded_ava);
            }
            $destinationPath = 'uploads/'; // upload path
            $user_avatar = date('YmdHis') . "." . $ava->getClientOriginalExtension();
            $ava->move($destinationPath, $user_avatar);
            $insert['avatar'] = "$user_avatar";

            $user->name = $request->name;
            $user->code = $request->code;
            $user->rank = $request->rank;
            $user->avatar = $insert['avatar'] = "$user_avatar";
        }
            $user->save();
        return redirect('/members');
    }

    public function deleteMember($id)
    {   
        $deleteavatar = Members::where('id',$id)->first();
        File::delete('uploads/'.$deleteavatar->avatar);

        $user = Members::find($id);
        $user->delete();
        return redirect('/members');
    }

    public function search(Request $request){
      $search = Members::when($request->searchInput, function ($query) use ($request) {
                $query->where('name', 'LIKE', "%{$request->searchInput}%")
                      ->orWhere('code', 'LIKE', "%{$request->searchInput}%")
                      ->orWhere('rank', 'LIKE', "%{$request->searchInput}%");
                })->paginate(5);
      return view('/members')->with('member', ($search));
   }
}