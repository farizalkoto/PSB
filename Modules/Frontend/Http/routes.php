<?php

Route::group(['middleware' => 'web', 'prefix' => 'frontend', 'namespace' => 'Modules\Frontend\Http\Controllers'], function()
{
    Route::get('/', 'FrontendController@index')->name('frontend.index');
    Route::get('/about', 'FrontendController@about')->name('frontend.about');
    Route::get('/event', 'FrontendController@event')->name('frontend.event');
    Route::get('/teacher', 'FrontendController@teacher')->name('frontend.teacher');
    Route::get('/department', 'FrontendController@department')->name('frontend.department');
    Route::get('/gallery', 'FrontendController@gallery')->name('frontend.gallery');
    Route::get('/announcement', 'FrontendController@announcement')->name('frontend.announcement');
    Route::get('/student/detail', 'FrontendController@studentDetail')->name('frontend.student.detail');
    Route::get('/event/detail', 'FrontendController@eventDetail')->name('frontend.event.detail');
});
