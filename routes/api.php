<?php

use Illuminate\Http\Request;

Route::get('/todos', 'TaskController@index');
Route::post('/todos', 'TaskController@store');
Route::patch('/todos/{task}', 'TaskController@update');
Route::delete('/todos/{task}', 'TaskController@destroy');

Route::patch('/todosCheckAll', 'TaskController@updateAll');
Route::delete('/todosDeleteCompleted', 'TaskController@destroyCompleted');
