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
    if(Auth::check()){
        return view('pages/home');
    }
    else{
        return view('welcome');
    }
});

Route::get('contact','PagesController@contact');
Route::get('about','PagesController@about');
Route::get('stats',function () {
    return view('pages/stats');
});
Route::get('pform',function () {
    return view('pages/pform');
});
Route::get('home',function () {
    $name = ['John Doe1','John Doe5','John Doe4','John Doe3','John Doe2'];
    return view('pages/home',compact('name'));
});


/**Route::get('create',function () {
    return view('groups/create');
});**/

Route::resource('articles','ArticlesController');
Route::resource('groups','GroupsController');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' =>'Auth\PasswordController',
]);
Route::get('foo',['middleware'=>'manager', function(){
  return 'this page only viewable by managers';
}]);