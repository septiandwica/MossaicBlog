<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\FePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(){
        $getPage = FePage::getSlug('Register');
        $data['meta_tit'] = !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_desc'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['meta_keys'] = !empty($getPage) ? $getPage->meta_keywords : '';
        return view("auth/register", $data);
    }
    
    public function registerSave(Request $request)
    {
        $request->validate([ 
            'name' => 'required',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);
        
        $userCount = User::count();
        $role_id = ($userCount >= 1) ? 2 : 1;

        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->username = trim($request->username);
        $user->password = Hash::make($request->password);
        $user->role_id = $role_id;
        $user->is_deleted = 0;
    
        if ($user->save()) {
            $successMessage = ($role_id === 1) ? 'Admin Registration is successful!' : 'Registration is successful!';
            return redirect('login')->with('success', $successMessage);
        } else {
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }

    public function login(){
        $getPage = FePage::getSlug('Login');
        $data['meta_tit'] = !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_desc'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['meta_keys'] = !empty($getPage) ? $getPage->meta_keywords : '';
        return view('auth/login' , $data);
    }
    public function loginAction(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $remember = !empty($request->remember) ? true : false;
        
        if ($deletedcheck = User::where('username', $credentials['username'])->first()) {
            if ($deletedcheck ->is_deleted == 1) {
                return redirect()->back()->with('error', 'Your account is deactivated. Please contact support.');
            }
        }
        
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Login Success');
        } else {
            return redirect()->back()->with('error', 'Please enter correct username and password');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/');
    }
}
