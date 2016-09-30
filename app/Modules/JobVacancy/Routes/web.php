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

Route::group(['prefix' => 'job-vacancy','middleware' => ['permission']], function() {
    Route::group(['prefix' => 'administrator'], function() {
        Route::get('/', 'Administrator\JobVacancyController@index');
        Route::get('/view/{id}', 'Administrator\JobVacancyController@view');
        Route::get('/status/{id}', 'Administrator\JobVacancyController@status');
        Route::get('/create', 'Administrator\JobVacancyController@create');
        Route::get('/edit/{id}', 'Administrator\JobVacancyController@edit');
        Route::post('/update', 'Administrator\JobVacancyController@update');
        Route::post('/delete', 'Administrator\JobVacancyController@delete');
    });
});
