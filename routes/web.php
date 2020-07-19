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

require 'pages/pages.php';

Route::group(['prefix' => 'admin'], function() {
	Auth::routes();
	Route::middleware(['checklogin'])->group(function () {
		foreach(glob(base_path('routes')."/modules/*.php") as $file){
	    require $file;
		}
	});
});

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/menu', function () {
//    return view('frontend.pages.khuyenmai');
//});
