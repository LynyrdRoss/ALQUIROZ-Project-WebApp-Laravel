<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest')->except('store', 'destroy');
	}

    public function create()
    {
    	return view('sign-in');
    }

    public function store(Request $request)
    {
    	// Attempt to authenticate the user loggin in
    	if (!auth()->attempt(request(['email', 'password']))) {
    		return back();
    	}

    	session()->flash('message', 'Login successful.');

    	return redirect()->home();
    }

    public function destroy()
    {
    	auth()->logout();

    	session()->flash('message', 'Logged out successfully');

    	return redirect()->home();
    }
}
