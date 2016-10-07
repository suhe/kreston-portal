<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 04/10/2016
 * Time: 16:53
 */
namespace App\Modules\People\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use App\Modules\People\Models\People;
use Breadcrumbs;
use SEOMeta;
use Setting;
use Theme;

class PeopleController extends Controller {
    public function __construct() {
		// Home > [People]
		Breadcrumbs::register('people', function($breadcrumbs, $slug) {
			$people = People::where(['slug' => $slug])->first();
			$breadcrumbs->parent('home');
			$breadcrumbs->push($people->name, url('people/'.$people->slug));
		});
    }
	
	public function index() {
		
	}

    public function show($slug,People $people) {
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
