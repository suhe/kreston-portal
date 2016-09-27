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

Route::group(['prefix' => 'user'], function() {
    Route::get('/', 'Administrator\AuthController@index');
    Route::group(['prefix' => 'administrator'], function() {
        Route::get('/', 'Administrator\UserController@index');
    });
});
