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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home',
]);

Route::get('/about-us', [
    'uses' => 'HomeController@about',
    'as' => 'about',
]);

Route::get('/lectures', [
    'uses' => 'HomeController@lectures',
    'as' => 'lectures',
]);

Route::get('/free-food', [
    'uses' => 'HomeController@freeFood',
    'as' => 'free.food',
]);

Route::get('/zakat', [
    'uses' => 'HomeController@zakat',
    'as' => 'zakat',
]);

Route::get('/hajj-umurah', [
    'uses' => 'HomeController@hajjUmurah',
    'as' => 'hajj.umurah'
]);

Route::get('/payments', [
    'uses' => 'HomeController@payment',
    'as' => 'payment',
]);

Route::get('/cloth', [
    'uses' => 'HomeController@cloth',
    'as' => 'cloth'
]);

Route::get('/more', [
    'uses' => 'HomeController@more',
    'as' => 'card'
]);

Route::post('/process-register', [
    'uses' => 'UserAuthController@postRegister',
    'as' => 'user.register',
]);

Route::post('/process-login', [
    'uses' => 'UserAuthController@postLogin',
    'as' => 'user.login',
]);

Route::get('/logout', [
    'uses' => 'UsersController@logout',
    'as' => 'logout',
    'middleware' => 'auth',
]);
