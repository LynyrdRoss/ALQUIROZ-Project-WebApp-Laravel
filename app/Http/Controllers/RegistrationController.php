<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class RegistrationController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

    public function create()
    {
    	return view('new-user');
    }

    public function store(Request $request)
    {
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|confirmed'
    	]);

    	$user = User::create([
    		'name' => $request['name'],
    		'email' => $request['email'],
    		'password' => bcrypt($request['password'])
    	]);

    	// Query builder equivalent
    	// $user = DB::table('users')->insert([
    	// 	'name' => $request->name,
    	// 	'email' => $request->email,
    	// 	'password' => bcrypt($request->password)
    	// ]);

    	auth()->login($user);

    	session()->flash('message', 'You\'re all set! Enjoy ' . $user['name']);

    	return redirect()->home();
    }
}