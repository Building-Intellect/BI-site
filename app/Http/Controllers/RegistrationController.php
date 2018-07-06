<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('auth.register');
    }

    public function store(Request $request)
    {

    	echo '<p>hello ' . $request->FirstName . '</p>';

    	$this->validate(request(), [
    		'FirstName' => 'required',
    		'LastName' => 'required',
    		'PhoneNumber' => 'required',
    		'EmailAddress' => 'required|email',
    		'UserName' => 'required',
    		'UserPassword' => 'required'
    	]);

    	

    	$user = User::create([
    		'FirstName' => $request->FirstName,
    		'LastName' => $request->LastName,
    		'PhoneNumber' => $request->PhoneNumber,
    		'EmailAddress' => $request->EmailAddress,
    		'UserName' => $request->UserName,
    		'UserPassword' => $request->UserPassword,
    		'TypeId' => '1'
    	]);

    	$user->save();

    	auth()->login($user);

    	return redirect()->home();
    }
}
