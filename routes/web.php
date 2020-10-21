<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "UniversalController@landing")->name('index');
// login
Route::get('/login', "AuthController@getLogin")->name('login')->middleware('guest');
Route::post('/o/login', "AuthController@postLogin")->name('post.login')->middleware('guest');
Route::get('/register', "AuthController@getReg")->name('register')->middleware('guest');
Route::post('/o/register', "AuthController@postReg")->name('post.register')->middleware('guest');
Route::post('logout', 'AuthController@logout')->name('logout')->middleware('auth');
Route::get('logout', function ()
{
	abort(404);
});



Route::middleware('auth')->group(function () {
	Route::get('/dashboard', "UniversalController@dashboard")->name('dashboard');

	Route::put('/{id}/update', "UniversalController@updateProfile")->name('update.profile');

	Route::get('/makanan', function (){
	    return view('pages.makan');
	})->name('makanan');

	Route::get('/cari-makanan', function (){
	    return view('pages.cari-makanan');
	})->name('cari.makanan');

});
