<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{

    public function showProfilePage(){
        return view('profile');
    }

    public function showEditProfilePage(){
        return view('edit-profile');
    }

    public function showEditPasswordPage(){
        return view('edit-password');
    }

    public function updateProfile(Request $request){
        $request->validate([
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:rfc,dns|unique:users',
            'phone' => 'required|min:10|max:13',
            'address' => 'required|min:5'
        ]);

        $user = Auth::user();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect('/profile');
    }

    public function updatePassword(Request $request){

        $request->validate([
            'old_password' => 'required|min:5|max:20',
            'new_password' => 'required|min:5|max:20'
        ]);

        $user = Auth::user();

        if(! Hash::check('old_password', $user->password)){
            return Redirect::back()->withErrors(['message' => 'Current password does not match with old password!']);
        }

        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect('/profile');
    }

    public function addUser(Request $request){
        $request->validate([
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5|max:20',
            'phone' => 'required|min:10|max:13',
            'address' => 'required|min:6'
        ]);

        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $phone = $request->phone;
        $address = $request->address;

        $user = User::create([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'phone' => $phone,
            'address' => $address,
            'role' => "user"
        ]);

        auth()->login($user);

        return redirect('/profile');
    }
}
