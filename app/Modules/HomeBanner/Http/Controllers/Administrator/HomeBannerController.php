<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 28/09/2016
 * Time: 14:28
 */
namespace App\Modules\HomeBanner\Http\Controllers\Administrator;

use Illuminate\Routing\Controller;
use App\Modules\HomeBanner\Models\HomeBanner;
use Crypt;
use Lang;
use Request;
use Response;
use Theme;
use Validator;

class HomeBannerController extends Controller {
    public function __construct() {
        Theme::setActive("administrator");
    }

    public function index(HomeBanner $home_banner) {
        return Theme::view ('home-banner::Administrator.index',array(
            'home_banners' =>  $home_banner
                ->where("name", "like", "%".Request::get("name")."%")
                ->where("storage_location", "like", "%".Request::get("location")."%")
                ->sortable()->paginate(2),
        ));
    }

    public function create() {
        return Theme::view ('home-banner::Administrator.form',array(
            'home-banner' =>  null,
        ));
    }

}