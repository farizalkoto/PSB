<?php

Route::group(['middleware' => ['web', 'auth', 'admin'], 'prefix' => 'galeri', 'namespace' => 'Modules\Image\Http\Controllers'], function()
{
    Route::get('/', 'ImageController@list');
    Route::get('/getData', 'ImageController@getData');
    Route::any('/create', 'ImageController@create');
    Route::any('/delete/{id}', 'ImageController@delete');
    Route::any('/edit/{id}', 'ImageController@edit');
});
