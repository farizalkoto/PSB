<?php

Route::group(['middleware' => ['web', 'auth', 'admin'], 'prefix' => 'pesan', 'namespace' => 'Modules\Message\Http\Controllers'], function()
{
    Route::any('/lulus', 'MessageController@lulus');
    Route::any('/nolulus', 'MessageController@nolulus');
});
