<?php

Route::group(['middleware' => 'web', 'prefix' => 'pendaftaran', 'namespace' => 'Modules\Registry\Http\Controllers'], function()
{
    Route::any('/', 'RegistryController@register');
    Route::get('/form', 'RegistryController@form')->name('registry.form');
});

Route::group(['middleware' => ['web', 'auth', 'admin'], 'prefix' => 'pendaftaran', 'namespace' => 'Modules\Registry\Http\Controllers'], function()
{
    Route::any('/status', 'RegistryController@status');
});
