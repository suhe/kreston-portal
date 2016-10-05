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

Route::group(['prefix' => 'contact-us','middleware' => ['permission']], function() {
    Route::group(['prefix' => 'administrator'], function() {
        Route::get('/', 'Administrator\ContactUsController@index');
        Route::get('/view/{id}', 'Administrator\ContactUsController@view');
        Route::get('/status/{id}', 'Administrator\ContactUsController@status');
        Route::get('/create', 'Administrator\ContactUsController@create');
        Route::get('/edit/{id}', 'Administrator\ContactUsController@edit');
        Route::post('/update', 'Administrator\ContactUsController@update');
        Route::get('/upload/{id}', 'Administrator\ContactUsController@upload');
        Route::get('/server-images','Administrator\ContactUsController@server_images');
        Route::post('/upload/post', 'Administrator\ContactUsController@do_upload');
        Route::post('/upload/delete', 'Administrator\ContactUsController@do_upload_delete');
        Route::post('/delete', 'Administrator\ContactUsController@delete');
    });
});