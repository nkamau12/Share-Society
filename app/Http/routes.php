<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
        return view('welcome');
});

Route::get('stats',function () {
    return view('pages/stats');
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' =>'Auth\PasswordController',
]);


Route::get('home','FirstController@index');
Route::get('create','FirstController@create');
Route::get('stats','FirstController@stats');
Route::resource('members','membercontroller');