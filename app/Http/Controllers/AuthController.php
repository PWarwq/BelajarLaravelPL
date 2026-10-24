<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView() 
    {
        return view('auth.login');
    }
    public function loginPost(Request $request) 
    {
        $creds = $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        if (Auth::attempt($creds)) {
            $request->session()->regenerate();
            return redirect()->route('students.index');
        }

        return back()->withErrors([
            'email' => "Email or password doesn't match"
        ]);
    }

    public function registerView() 
    {
        return view('auth.register');
    }
    public function registerPost(Request $request) 
    {
        //validate request
        $validateRequest = $request->validate([
            'name' => 'required | string',
            'email' => 'required | string | email | unique:users,email',
            'password' => 'required | string | min:8 | confirmed',
        ]);

        //Send data
        User::create([
            'name' => $validateRequest['name'],
            'email' => $validateRequest['email'],
            'password' => bcrypt($validateRequest['password']),
            'role' => 'student'
        ]);
        // handle if success
        return redirect()->route('login-view');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login-view');
    }
}
