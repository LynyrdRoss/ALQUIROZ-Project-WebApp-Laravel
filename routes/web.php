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
    return view('welcome');
});

Route::get('/posts', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@showForm');

Route::get('/posts/{id}', 'PostController@showById');

Route::get('posts/{id}/edit', 'PostController@editPostForm');

Route::get('posts/{id}/delete', 'PostController@deletePost');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('posts/comment/{id}', 'CommentController@deleteComment');

Route::post('/save-post', 'PostController@savePost');

Route::post('/save-comment', 'CommentController@saveComment');

Route::get('/posts/edit-comment/{id}', 'CommentController@editCommentForm');



Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/register-user', 'RegistrationController@create');

Route::post('/register-user', 'RegistrationController@store');



// Route::get('/login-user', 'SessionController@create');

Route::get('/login-user', ['as' => '/login-user', 'uses' => 'SessionController@create']);

Route::post('/login-user', 'SessionController@store');

Route::get('/logout-user', 'SessionController@destroy');