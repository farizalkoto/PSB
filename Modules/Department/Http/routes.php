<?php

Route::group(['middleware' => ['web', 'admin', 'auth'], 'prefix' => 'jurusan', 'namespace' => 'Modules\Department\Http\Controllers'], function()
{
    Route::get('/', 'DepartmentController@index');
    Route::get('/list', 'DepartmentController@list');
    Route::any('/create', 'DepartmentController@create');
    Route::any('/update/{id}', 'DepartmentController@update');
    Route::any('/delete/{id}', 'DepartmentController@delete');
});
