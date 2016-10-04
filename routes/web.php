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

use App\Modules\Navigation\Models\Navigation;
$NavBar = new Navigation();
Menu::make('MyNavBar', function($menu) use($NavBar)  {
    $navs = $NavBar->where(['is_active' => 1,'parent_id' => 0])->orderBy('order','asc')->get();
    foreach ($navs as $key => $nav) {
        $nav_bar = $menu->add($nav->name, url($nav->url));
        $nav_items = $NavBar->where(['is_active' => 1,'parent_id' => $nav->id])->orderBy('order','asc')->get();
        foreach ($nav_items as $xkey => $nav_item) {
            $nav_bar->add($nav_item->name, url($nav_item->url));
        }



        /*{
            $nav_items = $NavBar->where(['parent_id' => $nav->id,'is_active' => 1])->orderBy('order','asc')->get();
            foreach ($nav_items as $xkey => $nav_item) {
                $nav_bar->add($nav_item->name, url($nav_item->url));
            }
        }*/
    }
    //$home = $menu->add('Home');
   // $home->add('what','what_we_are');
    //$menu->add('what','what_we_are');
    //$menu->about->add('Who are we?', 'who-we-are');
    //$menu->about->add('What we do?', 'what-we-do');
    //$menu->get('what')->add('What We Do', 'what-we-do');

});



/*foreach (Addons::enabled() as $module){
    $file = app_path("../addons").'/'.$module['basename'].'/Routes/web.php';
    if (file_exists($file)){
        include $file;
    }
}*/


