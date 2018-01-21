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
    'uses' => 'UserController@getSignin',
    'as' => 'home'
]);

Route::get('/Home', [
    'uses' => 'UserController@getHomeFeeds',
    'as' => 'home.feeds'
]);

Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);


Route::get('/Commitees',[
    'uses' => 'UserController@getCommittees',
    'as' => 'committee'
]);


Route::post('/sign_in', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
]);



Route::post('/sign_up', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
]);


