<?php

use Illuminate\Http\Request;

Route::get('read', 'App\Http\Controllers\UsersController@read');
Route::post('signUp', 'App\Http\Controllers\UsersController@signUp');
Route::post('signIn', 'App\Http\Controllers\UsersController@signIn');
Route::post('create', 'App\Http\Controllers\UsersController@create');
Route::patch('updare', 'App\Http\Controllers\UsersController@update');
Route::post('delete', 'App\Http\Controllers\UsersController@delete');
});
