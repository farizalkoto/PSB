<?php

Route::group(['middleware' => ['web', 'user', 'auth'], 'prefix' => 'siswa', 'namespace' => 'Modules\Student\Http\Controllers'], function()
{
    Route::get('/', 'StudentController@home');
    Route::post('/save/{ids}', 'StudentController@save');
    Route::get('/list', 'StudentController@list');
    Route::get('/batal', 'StudentController@batal');
});

Route::group(['middleware' => ['web', 'admin', 'auth'], 'prefix' => 'siswa', 'namespace' => 'Modules\Student\Http\Controllers'], function()
{
    Route::post('/save/{ids}', 'StudentController@save');
    Route::get('/daftar/{status?}', 'StudentController@daftar');
    Route::get('/daftar/change/{id}', 'StudentController@change');
    Route::get('/daftar/detail/{id}', 'StudentController@detail');
    Route::get('/daftar/delete/{id}', 'StudentController@delete');
});

