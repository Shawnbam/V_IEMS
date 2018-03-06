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


Route::get('/Profile', [
    'uses' => 'UserController@getProfile',
    'as' => 'myprofile'
]);


Route::get('/Home/{type}', [
    'uses' => 'PostController@getCommitteesFeeds',
    'as' => 'home.committeefeeds'
]);


Route::get('/Home', [
    'uses' => 'PostController@getHomeFeeds',
    'as' => 'home.feeds'
]);


Route::get('/AttemptQuiz', [
    'uses' => 'StudentController@index',
    'as' => 'giveq'
]);


Route::get('/YourQuiz', [
    'uses' => 'QuizController@getYourQuiz',
    'as' => 'getyourquiz'
]);


Route::get('/Results/{uniqueid}', [
    'uses' => 'QuizController@getResults',
    'as' => 'getresults'
]);



Route::post('/Quiz',[
    'uses' => 'StudentController@store',
    'as' => 'quizpage'
]);


Route::post('/saveanswer', [
    'uses' => 'AnswerController@store',
    'as' => 'answer.store'
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


Route::get('/Post a Query',[
    'uses' => 'QueryController@getQueries',
    'as' => 'qa.postquery'
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


Route::post('/PostingQuery', [
    'uses' => 'QueryController@postCreateQuery',
    'as' => 'query.create'
]);


Route::get('/Queries', [
    'uses' => 'QueryController@getQueryFeeds',
    'as' => 'query.feeds'
]);


Route::get('/Query/{id}', [
    'uses' => 'QueryController@getQuery',
    'as' => 'query.view'
]);


Route::get('/Post/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'post.view'
]);


Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete'
]);


Route::get('/EditPost/{post_id}', [
    'uses' => 'PostController@postEditPost',
    'as' => 'post.edit'
]);


Route::get('/EditQuery', [
    'uses' => 'QueryController@postEditQuery',
    'as' => 'query.edit'
]);


Route::post('/updatePost', [
    'uses' => 'PostController@postUpdatePost',
    'as' => 'post.update'
]);


Route::post('/updateQuery', [
    'uses' => 'UserController@postUpdateQuery',
    'as' => 'query.update'
]);


Route::post('/store', [
    'uses' => 'QuizController@store',
    'as' => 'quiz.store'
]);


Route::post('/qstore/{cnt}', [
    'uses' => 'QuizController@qstore',
    'as' => 'qstore'
]);


Route::get('/Create Quiz', [
    'uses' => 'QuizController@getQuiz',
    'as' => 'quiz.get'
]);


Route::post('/SaveComment/{post_id}/{user_id}/{uname}', [
    'uses' => 'PcommentController@savePComment',
    'as' => 'pcomment.save'
]);


Route::get('/DeleteComment/{pcommentid}', [
    'uses' => 'PcommentController@deletePComment',
    'as' => 'pcomment.delete'
]);


Route::get('/Collaborate', [
    'uses' => 'CollaborateController@getCollaborateView',
    'as' => 'collaborate.view'
]);

Route::get('/PostYourIdea', [
    'uses' => 'CollaborateController@getCollaboratePost',
    'as' => 'collab.post'
]);


Route::post('/PostIdea',[
    'uses' => 'CollaborateController@postCollabSave',
    'as' => 'collab.save'
]);


Route::get('/Collaboratewith/{collab_id}', [
    'uses' => 'CollaborateController@getCollaboratewith',
    'as' => 'collab.with'
]);


Route::post('/postlike',[
    'uses' => 'PostController@postLikePost',
    'as' => 'plike'
]);


Route::post('/postcommentlike',[
    'uses' => 'PcommentController@postLikeCPost',
    'as' => 'pclike'
]);


Route::get('/books', [
    'uses' => 'BookController@getBook',
    'as' => 'books.buy'
]);



Route::get('/listsub', [
    'uses' => 'BookController@listsub',
    'as' => 'books.listsub'
]);


Route::post('/booksold', [
    'uses' => 'BookController@postSellBooks',
    'as' => 'books.sell'
]);


Route::post('/CreatingTag', [
    'uses' => 'PostController@postCreateTag',
    'as' => 'tag.createTag'
]);

Route::post('/CreatingQTag', [
    'uses' => 'QueryController@postCreateQTag',
    'as' => 'tag.createQTag'
]);


Route::post('/SaveQueryComment/{query_id}/{user_id}/{uname}', [
    'uses' => 'QcommentController@saveQComment',
    'as' => 'qcomment.save'
]);


Route::get('/DeleteQueryComment/{qcommentid}', [
    'uses' => 'QcommentController@deleteQComment',
    'as' => 'qcomment.delete'
]);


Route::get('/DeleteQuery/{query_id}', [
    'uses' => 'QueryController@getDeleteQuery',
    'as' => 'query.delete'
]);


Route::post('/Qclike',[
    'uses' => 'QcommentController@postLikeCQuery',
    'as' => 'qclike'
]);

Route::post('/QLike', [
    'uses' => 'QueryController@postLikeQuery',
    'as' => 'qlike'
]);
