<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	//echo 'test';
    return view('welcome');
});

/*foreach (Addons::enabled() as $module){
    $file = app_path("../addons").'/'.$module['basename'].'/Routes/web.php';
    if (file_exists($file)){
        include $file;
    }
}*/

