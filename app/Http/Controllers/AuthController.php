<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }


    public function postLogin(Request $request)
    {
    	// dd($request);
    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required',
    	]);

    	$credentials = [
    		'username' => $request->username,
    		'password' => $request->password,
    	];

    	// dd(Auth::attempt($credentials));

    	if (Auth::attempt($credentials)) {
    		return redirect()->route("dashboard");
    	}else{
            $username = User::where('username', $request->username)->first();
            $password = User::where('password', $request->password)->first();

            if (!$username && !$password) {
                return redirect()->back()->with('msgWarning','Akun tidak ditemukan');
            } else if(!$username) {
                return redirect()->back()->with('msgWarning','Username Tidak Cocok');
            }
            else if (!$password) {
                return redirect()->back()->with('msgWarning','Password Tidak Cocok');
            }
    	}
    }

    public function getReg()
    {
    	return view('register');
    }

    public function postReg(Request $request)
    {
    	$this->validate($request, [
    		'username' => 'required|unique:users|min:2',
    		'password' => 'required|min:8|max:32',
    		'age' => 'required|numeric',
    		'weight' => 'required|numeric',
    		'height' => 'required|numeric',
    		'gender' => 'required',
    		'name' => 'required',
    	]);

    	$user = User::create([
    		'username' => $request->username,
    		'password' => bcrypt($request->password),
    		'age' => $request->age,
    		'weight' => $request->weight,
    		'height' => $request->height,
    		'gender' => $request->gender,
    		'name' => $request->name,
    		'role' => "ADMIN",
    	]);

    	Auth::loginUsingId($user->id);

    	return redirect()->route("dashboard");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
