<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Members;
use App\Csgos;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function editprofile($id, Request $request){
        // dd($request->all());
        // dd($path);
        $this->validate($request,[
           'main_name' => 'required',
           'age' => 'required',
           'gender' => 'required',
           'language' => 'required',
           'additional_info' => 'nullable',
           'avatarinput' => 'required|image|mimes:jpeg,png,jpg|max:2048',

           'csgo_name' => 'required',
           'main_role1' => 'nullable',
           'main_role2' => 'nullable',
           'main_role3' => 'nullable',
           'tactical_role1' => 'nullable',
           'tactical_role2' => 'nullable',
           'tactical_role3' => 'nullable',
           'rank' => 'required',
           'friend_code' => 'required',
           'server_region' => 'required'
       ]);

        $editmember = Members::find($id);
          if ($ava = $request->file('avatarinput')){
            $uploaded_ava = public_path("uploads\{$editmember->avatar}"); // get image from folder

            if (File::exists($uploaded_ava)) { // remove image from folder
                unlink($uploaded_ava);
            }
            $destinationPath = 'uploads/'; // upload path
            $user_avatar = date('YmdHis') . "." . $ava->getClientOriginalExtension();
            $ava->move($destinationPath, $user_avatar);
            $insert['avatar'] = "$user_avatar";

            $editmember->name = $request->main_name;
            $editmember->age = $request->age;
            $editmember->gender = $request->gender;
            $editmember->language = $request->language;
            $editmember->additional_info = $request->additional_info;
            $editmember->avatar = $insert['avatar'] = "$user_avatar";
          }
            $editmember->save();

        $editcsgo = Csgos::find($id);
            $editcsgo->name = $request->csgo_name;
            $editcsgo->main_role1 = $request->main_role1;
            $editcsgo->main_role2 = $request->main_role2;
            $editcsgo->main_role3 = $request->main_role3;
            $editcsgo->tactical_role1 = $request->tactical_role1;
            $editcsgo->tactical_role2 = $request->tactical_role2;
            $editcsgo->tactical_role3 = $request->tactical_role3;
            $editcsgo->rank = $request->rank;
            $editcsgo->friend_code = $request->friend_code;
            $editcsgo->server_region = $request->server_region;
            $editcsgo->save();

        return redirect('/profile');
    }
}
