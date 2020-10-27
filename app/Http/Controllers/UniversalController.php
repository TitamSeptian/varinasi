<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UniversalController extends Controller
{
    public function landing()
    {
    	return view('index');
    }

    public function dashboard()
    {
    	return view('pages.dashboard');
    }

    public function updateProfile(Request $request, $id)
    {

    	$this->validate($request, [
    		'age' => 'required|numeric',
    		'weight' => 'required|numeric',
    		'height' => 'required|numeric',
    		'name' => 'required',
    	]);

    	$user = User::findOrFail($id);

    	$user->update([
    		'age' => $request->age,
    		'weight' => $request->weight,
    		'height' => $request->height,
    		'name' => $request->name,
    	]);

    	return redirect()->back()->with('msgSuccess', 'Berhasil diubah');

    }

    public function aboutUs()
    {
        return view("pages.about");
    }

    public function privacy()
    {
        return view("pages.privacy-policy");
    }
}
