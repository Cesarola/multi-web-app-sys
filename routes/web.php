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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Backend Routes
Route::prefix('backend')->namespace('Backend')->group(function(){

	// Authentication
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('backend.login');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('backend.logout');

	Route::get('/','DashboardController')->name('backend.dashboard');

	Route::resource('users','UserController', ['names' => 'backend.users']);
});