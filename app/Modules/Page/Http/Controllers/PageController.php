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
use Breadcrumbs;
use SEOMeta;
use Setting;
use Theme;

class PageController extends Controller {
    public function __construct() {
		// Home > [Page]
		Breadcrumbs::register('page', function($breadcrumbs, $slug) {
			$page = Page::where(['slug' => $slug])->first();
			$breadcrumbs->parent('home');
			$breadcrumbs->push($page->name, url($page->slug));
		});
    }

    public function show($slug,Page $page) {
		$xpage = $page->where(['slug' => $slug])->first();
		$related_page = explode(";",$xpage->related_page);
		$link_related_page = $related_page ? $related_page : null; 
		
		SEOMeta::setTitle(Setting::get_key('company_name').' '.$page->name)
		->setDescription($page->meta_description)
		->setCanonical(url('/'))
		->addKeyword($page->meta_keyword);
		
        return Theme::view ('page::index',array(
            'page' => $xpage,
			'link_related_page' => $page->whereIn('id',$link_related_page)->get(),
        ));
    }
}