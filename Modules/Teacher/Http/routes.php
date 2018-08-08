<?php

Route::group(['middleware' => ['web', 'auth', 'admin'], 'prefix' => 'guru', 'namespace' => 'Modules\Teacher\Http\Controllers'], function()
{
    Route::get('/', 'TeacherController@list');
    Route::get('/getData', 'TeacherController@getData');
    Route::any('/create', 'TeacherController@create');
    Route::any('/edit/{id}', 'TeacherController@update');
    Route::any('/delete/{id}', 'TeacherController@delete');
});
