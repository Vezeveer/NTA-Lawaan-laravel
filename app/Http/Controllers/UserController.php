<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // show register user form
    public function create(){
        return view('users.register');
    }

    // store user
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'userType' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user
        $user = User::create($formFields);

        // login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    // Show login form
    public function login(){
        request()->session()->put('activePage', 'fromLoginPage');

        return view('users.login', ['activeYear' => 2009]);
    }

    // Login User
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'name' => ['required'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            $request->session()->put('enableContent', false);
            $request->session()->put('adminAccess', false);
            $request->session()->put('userType', 'bdc');
            $request->session()->put('username', 'Jovi3000');
            $request->session()->put('status', 'bdc initializing111');


            return redirect('/')->with('message', 'You are now logged in.');
        }

        return back()->withErrors(['name' => 'Invalid Name or Password.'])->onlyInput('name');
    }

    // logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'User logged out!');
    }

    
}
