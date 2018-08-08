<?php

Route::get('/', function () {
    return redirect('/frontend');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
