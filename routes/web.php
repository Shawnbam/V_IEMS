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

Route::get('/Home/{type}', [
    'uses' => 'PostController@getCommitteesFeeds',
    'as' => 'home.committeefeeds'
]);

Route::get('/Home', [
    'uses' => 'PostController@getHomeFeeds',
    'as' => 'home.feeds'
]);

Route::get('/Add a Post', [
    'uses' => 'PostController@getAddPost',
    'as' => 'posts.addpost'
]);

Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);


Route::get('/Commitees',[
    'uses' => 'PostController@getCommittees',
    'as' => 'committee'
]);


Route::post('/sign_in', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
]);


Route::post('/CreatingPost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create'
]);



Route::post('/sign_up', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
]);


