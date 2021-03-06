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

	Route::resource('/tipe', "TypeController");
	Route::get('/data/t', "TypeController@datatables")->name('tipe.data');

	Route::resource('/bahan', "IngredientController");
	Route::get('/data/b', "IngredientController@datatables")->name('bahan.data');
	Route::get('/sel2/b', "IngredientController@findIngredient")->name('bahan.sel2');

	Route::resource('/makanan', "FoodController");
	Route::get('/data/m', "FoodController@datatables")->name('makanan.data');
	Route::get('/lihat-makanan/{id}', "FoodController@showFood")->name("makan.show");
	Route::post('/eating/{id}', 'FoodController@eating')->name("makan.eat");



	Route::get('/list-makanan/', "FoodController@allMakanan")->name('makanan');
	Route::get('/tentang-kami', "UniversalController@aboutUs")->name("aboutUs");	
	Route::get('/kebijakan-privasi', "UniversalController@privacy")->name("privacy");	

	Route::get('/sudah-makanan', "FoodController@sudahMakan")->name('sudah.makan');
	Route::get('/data/sm', "FoodController@dataSudahMakan")->name('data.sudah.makan');


	Route::get("/aaa", function (){
		$a = \App\CalorieUse::groupBy('user_id', 'date')
			->where("user_id", \Auth::id())
			->where("date", \Date::now()->format("Y-m-d"))
			->select(\DB::raw("SUM(qty*calorie) as total_calorie"), "user_id")
			->first();
		dd($a);
	});

});
