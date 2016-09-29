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
	return redirect("/home");
});

Route::get('/administrator', function () {
	return redirect("/session/login");
});

Route::get('/photo/{filename}/{w?}/{h?}', function($filename,$w=100,$h=100) {
    $cacheimage = Image::cache(function($image) use($filename, $w, $h){
        return $image->make($filename)->resize($w,$h);
    },10); // cache for 10 minutes
    return Response::make($cacheimage, 200, array('Content-Type' => 'image/jpeg'));
});



/*foreach (Addons::enabled() as $module){
    $file = app_path("../addons").'/'.$module['basename'].'/Routes/web.php';
    if (file_exists($file)){
        include $file;
    }
}*/


