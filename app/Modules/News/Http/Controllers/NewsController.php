<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 04/10/2016
 * Time: 16:53
 */
namespace App\Modules\News\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use App\Modules\Post\Models\Post;
use Breadcrumbs;
use SEOMeta;
use Setting;
use Theme;

class NewsController extends Controller {
    public function __construct() {
		// Home > [People]
		Breadcrumbs::register('news', function($breadcrumbs) {
			$breadcrumbs->parent('home');
			$breadcrumbs->push('news', url('news/'));
		});
    }
	
	public function index() {
		return Theme::view ('news::index',array(
            
        ));
	}

    public function read($slug,People $people) {
		$xpeople = $people->where(['slug' => $slug])->first();
		SEOMeta::setTitle(Setting::get_key('company_name').' '.$people->name)
		->setDescription($people->description)
		->setCanonical(url('/'))
		->addKeyword($people->name);
		
        return Theme::view ('people::index',array(
            'people' => $xpeople,
			'our_peoples' => $people->where('is_active',1)->get(),
        ));
    }
}
