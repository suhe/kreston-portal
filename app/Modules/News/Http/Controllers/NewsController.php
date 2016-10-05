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
use Config;
use Lang;
use SEOMeta;
use Setting;
use Theme;

class NewsController extends Controller {
    public function __construct() {
		// Home > [People]
		Breadcrumbs::register('news', function($breadcrumbs) {
			$breadcrumbs->parent('home');
			$breadcrumbs->push(Lang::get('news::app.news'), url('news/'));
		});

    }
	
	public function index(Post $post) {
		SEOMeta::setTitle(Setting::get_key('company_name').' '.Lang::get('news::app.news'))
		->setDescription('Kreston News')
		->setCanonical(url('/'))
		->addKeyword('kreston','kreston news','news');
		
		return Theme::view ('news::index',array(
			'posts' =>  $post
                ->where('is_active',1)
				->orderBy('created_at','desc')
                ->sortable()->paginate(Setting::get_key('limit_page') ? Setting::get_key('limit_page') : Config::get('site.limit_page')),
        ));
	}

    public function read($id,Post $post) {
		Breadcrumbs::register('news_read', function($breadcrumbs) use ($id) {
			$post = Post::where(['id' => $id])->first();
			$breadcrumbs->parent('home');
			$breadcrumbs->push($post->title,url('/'));
		});
		
		$xpost = $post->where(['id' => $id])->first();
		SEOMeta::setTitle(Setting::get_key('company_name').' '.$xpost->title)
		->setDescription(str_limit($xpost->description,100))
		->setCanonical(url('/'))
		->addKeyword($xpost->meta_keyword);
		
        return Theme::view ('news::read',array(
            'post' => $xpost,
			//'our_peoples' => $people->where('is_active',1)->get(),
        ));
    }
}
