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

Route::get('/', function () {
    return view('home');
});


Route::get('/hash', 'UserController@hash')->name('users.hash');
Route::post('/store_hash', 'UserController@store_hash')->name('store_hash');
Route::post('/searchHash', 'UserController@searchHash')->name('searchHash');





//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//////////////////Login Register and logout 
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(array('before' => 'auth'), function() {
    
});
Auth::routes(['verify' => true]);
