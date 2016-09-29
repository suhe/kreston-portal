<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 28/09/2016
 * Time: 14:28
 */
namespace App\Modules\Home\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\HomeBanner\Models\HomeBanner;
use App\Modules\Post\Models\Post;
use Auth;
use Crypt;
use Lang;
use Redirect;
use Request;
use Response;
use Theme;
use Validator;

class HomeController extends Controller {
    public function index(HomeBanner $home_banners,Post $post) {
        return Theme::view ('home::index',array(
			'home_banners' => $home_banners->where(['is_active' => 1])->get(),
			'latest_news' => $post->where(['is_active' => 1,'type' => 'News'])->orderBy('created_at','asc')->limit(10)->get(),
        ));
    }

}