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

Route::group(['prefix' => 'people','middleware' => ['permission']], function() {
    Route::group(['prefix' => 'administrator'], function() {
        Route::get('/', 'Administrator\PeopleController@index');
        Route::get('/view/{id}', 'Administrator\PeopleController@view');
        Route::get('/status/{id}', 'Administrator\PeopleController@status');
        Route::get('/create', 'Administrator\PeopleController@create');
        Route::get('/edit/{id}', 'Administrator\PeopleController@edit');
        Route::post('/update', 'Administrator\PeopleController@update');
        Route::post('/delete', 'Administrator\PeopleController@delete');
    });
});
