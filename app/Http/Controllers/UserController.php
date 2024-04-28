<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function user(){
        $data['getRecord'] = User::getRecordUser();
        return view("admin.users.list", $data);
    }
    public function add_user(Request $request){
        return view("admin.users.add");

    }
    public function add_user_action(Request $request){

        $request->validate([ 
            'name' => 'required',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->username = trim($request->username);
        $user->password = Hash::make($request->password);
        $user->role_id = 2;

        $user->save();
        return redirect("dashboard/users/list")->with("success","User added successfully.");
    }

    public function edit_user($id){
        $data['getRecord'] = User::getSingle($id);
        return view('admin.users.edit', $data);
        
    }

    public function edit_user_action(Request $request, $id)
    {
        $request->validate([ 
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);
        $user = User::getSingle($id);

        $user->name = trim($request->name);
        $user->username = trim($request->username);
        
        if (!empty($request->password)) {
            $request->validate([ 
                'password' => 'min:8'
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->role_id = 2;
        $user->save();

        return redirect("dashboard/users/list")->with("success", "User updated successfully.");
    }

    public function delete_user($id){
        $user = User::getSingle($id);

        if ($user) {
            $user->is_deleted = 1;
            $user->save();
            return redirect()->back()->with("success", "User deleted successfully.");
        } else {
            return redirect()->back()->with("error", "User not found.");
        }
    }

    public function accountsettings(){
        $data['getUser'] = User::getSingle(Auth::user()->id);
        return view("admin.users.profile.account", $data);
    }
    public function accountupdate(Request $request){
        $getUser = User::getSingle(Auth::user()->id);
        $getUser->name = $request->name;
        $getUser->username = $request->username;
        $getUser->instagram = $request->instagram_username;
        $getUser->linkedin = $request->linkedin_username;
        $getUser->about = $request->about;

       


        if(!empty($request->file('image_file'))){
            if(!empty($getUser->image_file) && file_exists('upload/users/'. $getUser->image_file)){
                unlink('upload/users/'. $getUser->image_file);
            }
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = Str::random(20).'.'.$ext;
            $file->move('upload/users/', $filename);

            $getUser->image_file = $filename;
        }
        $getUser->save();

        return redirect()->back()->with("success","Your Account Successfully Updated");
    }
    public function changepassword(){
        $data['getUser'] = User::getSingle(Auth::user()->id);
        return view("admin.users.profile.account", $data);
    }
    public function updatepassword(Request $request){

        $getUser = User::getSingle(Auth::user()->id);
        if(Hash::check($request->currentpassword, $getUser->password)){
            if ($request->newpassword == $request->confirmpassword) {
                $getUser->password = Hash::make($request->newpassword);
                $getUser->save();

                return redirect()->back()->with("success","Your Password Successfully Changed");
            }
            else{
                return redirect()->back()->with("error","Confirm Password does not match with New Password");
            }
        }else{
            return redirect()->back()->with("error","Old Password does not match in Database");
        }
    }
}
