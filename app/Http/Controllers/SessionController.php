<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    public function create(){
    	return view('login.create');
    }

    public function store(){
    	 if (Auth::attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
       
       return redirect()->route('games');
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }
}
