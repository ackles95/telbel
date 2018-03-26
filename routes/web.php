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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', function () {
    return view('index');
});


Route::get('/insertphone', function (){

   return view('insertphone');

});

Route::resource('phone', 'PhoneController');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->where(['provider' => 'facebook|google|twitter']);
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where(['provider' => 'facebook|google|twitter']);;

Route::get('/profile', 'ProfileController@getProfile')->middleware('auth');

Route::get('/logout', 'ProfileController@logout');
