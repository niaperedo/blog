<?php

use \App\Task;

Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/tasks', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');