<?php

Route::post('logout', 'AuthController@logout');

Route::post('auth/check', 'AuthController@test');
Route::post('auth/refresh', 'AuthController@refresh');

Route::get('users', 'UserController@search');
Route::delete('users/{user}', 'UserController@delete');

Route::get('connections', 'ConnectionController@all');
Route::post('connections', 'ConnectionController@create');
Route::put('connections/{id}', 'ConnectionController@update');
Route::delete('connections/{id}', 'ConnectionController@destroy');

Route::get('postgres/test');
Route::get('postgres/schema');
Route::get('postgres/select');
Route::get('postgres/update');
