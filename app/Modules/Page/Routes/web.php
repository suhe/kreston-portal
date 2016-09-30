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

Route::group(['prefix' => 'page','middleware' => ['permission']], function() {
	Route::group(['prefix' => 'administrator'], function() {
		Route::get('/', 'Administrator\PageController@index');
        Route::get('/view/{id}', 'Administrator\PageController@view');
        Route::get('/status/{id}', 'Administrator\PageController@status');
        Route::get('/create', 'Administrator\PageController@create');
        Route::get('/edit/{id}', 'Administrator\PageController@edit');
        Route::post('/update', 'Administrator\PageController@update');
        Route::post('/delete', 'Administrator\PageController@delete');
	});	
});