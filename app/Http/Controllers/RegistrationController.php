<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Auth;

class RegistrationController extends Controller
{
    public function create(){
    	return view('registartion.create');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required|email|unique:registrations,email,.$registartion->id',
    		'password'=>'required|confirmed'
    	]);

    	$user=Registration::create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>$request->password
    	]);

    	//Auth()::login($user);
    	//Manually Logging In A User(if you need to log an existing user instance into your application)

    	return redirect()->route('games');
    }
}
