<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::pattern('id', '[0-9]+');

Route::get('/', 'HomeController@index');

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('/books', 'BooksController@index');
Route::get('/books/{id}', 'BooksController@show');
Route::get('/books/{id}/edit', 'BooksController@edit');
Route::post('/books/{id}/store', 'BooksController@store');
Route::post('/books/create', 'BooksController@create');
Route::get('/books/new', 'BooksController@newBook');
Route::get('/books/{id}/delete', 'BooksController@delete');
Route::post('/books/{id}/comment', 'BooksController@comment');
Route::get('/comments', 'CommentsController@index');
Route::get('/comments/{id}/delete', 'CommentsController@delete');
