<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 04/10/2016
 * Time: 16:53
 */
namespace App\Modules\Page\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Modules\Page\Models\Page;
use Theme;

class PageController extends Controller {
    public function __construct() {

    }

    public function show($slug,Page $page) {
        return Theme::view ('page::index',array(
            'page' => $page->where(['slug' => $slug])->first(),
        ));
    }
}
