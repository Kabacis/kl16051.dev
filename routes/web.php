<?php

///Basic Routes
Route::get('/', 'BananaController@index');
Route::get('/SP', 'BananaController@showSP');
Route::get('/SP/{banana}', 'BananaController@show');
Route::post('/SP/{banana}/resursi', 'ResursiController@store');



///make:auth routes
Auth::routes( );

Route::get('/home', 'HomeController@index')->name('home');



///old stuff
///
Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/album', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');


Route::get('/blog', 'BlogController@index');

Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');
Route::get('/blog/{blog}', 'BlogController@show');


