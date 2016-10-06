<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 28/09/2016
 * Time: 14:28
 */

namespace App\Modules\Page\Http\Controllers\Administrator;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\Page\Models\Page;
use Illuminate\Support\Str;
use Auth;
use Config;
use Crypt;
use Lang;
use Redirect;
use Request;
use Response;
use SEOMeta;
use Setting;
use Theme;
use Validator;

class PageController extends Controller {
    public function __construct() {
        Theme::setActive("administrator");
    }

    public function index(Page $page) {
		SEOMeta::setTitle(Config::get('site.admin_page_title').' '.Lang::get('page::app.page'));
        return Theme::view ('page::Administrator.index',array(
            'pages' => $page->recursive(),
		
        ));
    }

    public function create(Page $page) {
		SEOMeta::setTitle(Config::get('site.admin_page_title').' '.Lang::get('action.create').' '.Lang::get('page::app.page'));
        return Theme::view ('page::Administrator.form',array(
			'page_dropdown' => $page->dropdown(Lang::get("action.root")),  
			'page_related' => $page->dropdown(), 
            'page' =>  null,
        ));
    }

    public function view($id,Page $page) {
		SEOMeta::setTitle(Config::get('site.admin_page_title').' '.Lang::get('action.view').' '.Lang::get('page::app.page'));
        $id = Crypt::decrypt($id);
        return Theme::view ('page::Administrator.view',array(
            'page' =>  $page->find($id),
        ));
    }

    public function status($id,Page $page) {
        $ids = Crypt::decrypt($id);
        $page = $page->find($ids);
        if($page) {
            if($page->is_active == 1) {
                $is_active = 0;
            } else {
                $is_active = 1;
            }
            $page->is_active = $is_active;
            $page->updated_at = date("Y-m-d H:i:s");
            $page->save();
        }

        return Redirect::intended ( '/page/administrator/view/'.$id);
    }

    public function edit($id,Page $page) {
		SEOMeta::setTitle(Config::get('site.admin_page_title').' '.Lang::get('action.edit').' '.Lang::get('page::app.page'));
        $id = Crypt::decrypt($id);
		$page = $page->find($id);
		$related_page = explode(";",$page->related_page);
        return Theme::view ('page::Administrator.form',array(
			'page_dropdown' => $page->dropdown(Lang::get("action.root")),  
			'page_related' => $page->dropdown(), 
            'page' =>  $page,
			'related_page' => (count($related_page) > 0 ? $related_page : null),
        ));
    }

    public function update(Page $page) {
        $id =  Input::has("id") ? Crypt::decrypt(Input::get("id")) : null;
        $name = Input::get("name");
		$parent_id = Input::get("parent_id");
        $category_id = 1;
        $content = Input::get("content");
		$meta_keyword = Input::get("meta_keyword");
		$meta_description = Input::get("meta_description");
		$link_page = "";
		$related_page = Input::get("related_page");
		$total_related_page = count($related_page);
		if($total_related_page > 0) {
			for($i = 0;$i<$total_related_page;$i++) {
				if(isset($related_page[$i])) {
					//link page
					$link_page.=$related_page[$i];
					if($i != ($total_related_page - 1)) {
						$link_page.=";";
					}
				}
			} 
		}

        $field = array (
            'name' => $name,
        );

        $rules = array (
            'name' => 'required',
        );

        $validate = Validator::make($field,$rules);
        if($validate->fails()) {
            $params = array(
                'success' => false,
                'message' => $validate->getMessageBag()->toArray()
            );
        } else {
            if(!empty($id)) {
                //update home_banner
                $page = $page->find($id);
				$page->name  = $name;
                $page->slug  = Str::slug($name,'-');
                $page->url  = '/page/'.Str::slug($name,'-');
                $page->parent_id = $parent_id;
                $page->content = $content;
				$page->related_page = $link_page;
				$page->meta_keyword = $meta_keyword;
				$page->meta_description = $meta_description;
                $page->updated_at = date("Y-m-d H:i:s");
				$page->updated_by = Auth::user()->id;
                $page->save();
                $message = Lang::get('page::message.update successfully');
            } else {
                $page->name  = $name;
                $page->slug  = Str::slug($name,'-');
                $page->url  = '/page/'.Str::slug($name,'-');
                $page->parent_id = $parent_id;
                $page->content = $content;
				$page->related_page = $link_page;
				$page->meta_keyword = $meta_keyword;
				$page->meta_description = $meta_description;
                $page->created_at = date("Y-m-d H:i:s");
                $page->created_by = Auth::user()->id;
                $page->updated_at = date("Y-m-d H:i:s");
                $page->updated_by = Auth::user()->id;
                $page->save();
                $message =  Lang::get('page::message.insert successfully');
            }
            $params ['success'] =  true;
            $params ['redirect'] = url('/page/administrator/view/'.Crypt::encrypt($page->id));
            $params ['message'] =  $message;
        }

        return Response::json($params);
    }

    public function delete(Page $page) {
        $id = Crypt::decrypt(Input::get("id"));
        $is_exists = $page->select(['id'])->where('id',$id)->first();
        if($is_exists) {
            $page->where(['id' => $id])->delete();
            $params ['id'] =  $is_exists->id;
            $params ['success'] =  true;
            $params ['message'] =  Lang::get('page::message.delete successfully');
        }
        return Response::json($params);
    }

}