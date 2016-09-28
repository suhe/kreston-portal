<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'home-banner','middleware' => ['permission']], function() {
    Route::group(['prefix' => 'administrator'], function() {
        Route::get('/', 'Administrator\HomeBannerController@index');
        Route::get('/view/{id}', 'Administrator\HomeBannerController@view');
        Route::get('/create', 'Administrator\HomeBannerController@create');
        Route::get('/edit/{id}', 'Administrator\HomeBannerController@edit');
        Route::post('/update', 'Administrator\HomeBannerController@update');
        Route::get('/reset-password/{id}', 'Administrator\HomeBannerController@reset_password');
        Route::post('/update/password', 'Administrator\HomeBannerController@update_password');
        Route::post('/delete', 'Administrator\HomeBannerController@delete');
    });
});
