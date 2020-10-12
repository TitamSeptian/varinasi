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

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('index');

Route::get('/makanan', function (){
    return view('pages.makan');
})->name('makanan');

Route::get('/cari-makanan', function (){
    return view('pages.cari-makanan');
})->name('cari.makanan');
