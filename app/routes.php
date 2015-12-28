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

//route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

//route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::post('/theses/create', 'ThesisController@create');
Route::post('/search', 'ThesisController@search');
Route::post('/searchLect', 'ThesisController@searchLect');
//Route::post('/theses/addThesis', 'ThesisController@addThesis');

Route::resource('/theses/addThesis', 'ThesisController');

Route::post('/theses/addReviewer', 'ThesisController@addReviewer');
Route::post('/theses/addLNote', 'ThesisController@addLNote');
Route::post('/theses/addRNote', 'ThesisController@addRNote');

Route::get('/theses', 'ThesisController@getTheses');
Route::get('/theses/waitingForApproval', 'ThesisController@getThesisforApproval');
Route::get('/theses/adminCharts', 'ThesisController@getadminCharts');
Route::get('/theses/allThesesList/{lecturer}', 'ThesisController@getThesisList');
Route::get('/theses/allReviewedList/{reviewer}', 'ThesisController@getReviewedList');
Route::get('/theses/{id}/approve', 'ThesisController@approve');
Route::get('/theses/reserved/{id}/student/{student}', 'ThesisController@reserved');
Route::get('/theses/student/{id}/remove', 'ThesisController@remove');
Route::get('/showThesis_{id}', 'ThesisController@show');


Route::get('/theses/{date}/{spec}/{level}', 'ThesisController@getThesisInf');
