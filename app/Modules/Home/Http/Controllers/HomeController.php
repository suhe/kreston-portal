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
use Auth;
use Crypt;
use Lang;
use Redirect;
use Request;
use Response;
use Theme;
use Validator;

class HomeController extends Controller {
    public function index(HomeBanner $home_banners) {
        return Theme::view ('home::index',array(
			'home_banners' => $home_banners->where(['is_active' => 1])->get()
        ));
    }

}