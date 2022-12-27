<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('warehouse'));
        }

        // Authentication failed...
        return redirect()->back()->withInput()->withErrors(['credentials' => 'Las credenciales no coinciden']);
    }

    public function logout(Request $request) {
        Session::flush();
        // $request->session()->flush();
        Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect(route('home'));
    }

    public function register(Request $request) { 
        // $user = new User();
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $new_user = new User;
        $new_user->name = $request->input('name');
        $new_user->lastname = $request->input('last_name');
        $new_user->email = $request->input('email');
        $new_user->password = $request->input('password');
        $new_user->save();

        return view('home');
    }
}
