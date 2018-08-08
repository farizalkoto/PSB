<?php

Route::group(['middleware' => 'web', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::get('/', 'UserController@index');
    Route::get('/list', 'UserController@list');
    Route::any('/create', 'UserController@create');
    Route::any('/delete/{id}', 'UserController@delete');
    Route::any('/detail/{id}', 'UserController@detail');
});

