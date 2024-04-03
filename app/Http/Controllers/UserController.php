<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email',
        ]);
        $user = User::getSingle($id);

        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->username = trim($request->username);
        
        if (!empty($request->password)) {
            $request->validate([ 
                'password' => 'min:8'
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->role_id = 2;
        $user->instagram = trim($request->instagram_username);
        $user->linkedin = trim($request->linkedin_username);
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
}
