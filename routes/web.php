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
use App\Modules\Post\Models\Post;
$NavBar = new Navigation();
$Post = new Post();

Menu::make('MyNavBar', function($menu) use($NavBar,$Post)  {
    $navs = $NavBar->where(['is_active' => 1,'parent_id' => 0])->orderBy('order','asc')->get();
    foreach ($navs as $key => $nav) {
        $nav_bar = $menu->add($nav->name, url($nav->url));
		if(!empty($nav->post)) {
			$nav_items = $Post->where(['type' => $nav->post,'is_active' => 1])->orderBy('created_at','desc')
			->selectRaw("id,title as name,CONCAT(LOWER(type),'/read/',id,'/',slug) as url")->get();
		} else {
			$nav_items = $NavBar->where(['is_active' => 1,'parent_id' => $nav->id])->orderBy('order','asc')->get();
		}
		   
        foreach ($nav_items as $xkey => $nav_item) {
            $nav_bar->add($nav_item->name, url($nav_item->url));
        }
	}	
});






