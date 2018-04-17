<?php

use \App\Task;

Route::get('/', 'PostController@index');

Route::get('/tasks', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');

