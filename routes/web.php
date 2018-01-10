<?php


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');


Route::get('/blog', 'BlogController@index');

Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');