<?php

namespace App\Http\Controllers;
use Hash;
use Auth;
use Alert;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
    	$user = User::where('id', Auth::user()->id)->first();

    	return view('profiles.indeks', [
            "title" => "User"
        ], compact('user'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->nohp = $request->nohp;
    	$user->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	return redirect('profile');
    }
}
