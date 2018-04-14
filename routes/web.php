<?php

use \App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');

