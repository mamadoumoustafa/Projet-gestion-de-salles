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
    // return view('welcome');
// });

Route::get('/', 'WelcomeController@index');
Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');
Route::resource('user', 'UserController');
Route::get('page3', function() { 
    return view('page3'); 
});
Route::resource('/reservation', 'ReservationController');
Route::get('/doReservation', function(){
	return view('doReservation');
});
Route::post('/reservation', 'SalleController@index');
Route::post('/reservation/save', 'ReservationController@store');

Route::get('/home', function() { 
	return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
