<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 28/09/2016
 * Time: 14:28
 */

namespace App\Modules\News\Http\Controllers\Administrator;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\Post\Models\Post;
use Auth;
use Crypt;
use Lang;
use Redirect;
use Request;
use Response;
use Theme;
use Validator;

class NewsController extends Controller {
    public function __construct() {
        Theme::setActive("administrator");
    }

    public function index(Post $post) {
        return Theme::view ('news::Administrator.index',array(
            'posts' =>  $post
                ->where("title", "like", "%".Request::get("title")."%")
                ->sortable()->paginate(2),
        ));
    }

    public function create() {
        return Theme::view ('news::Administrator.form',array(
            'post' =>  null,
        ));
    }

    public function view($id,Post $post) {
        $id = Crypt::decrypt($id);
        return Theme::view ('news::Administrator.view',array(
            'post' =>  $post->find($id),
        ));
    }

    public function status($id,Post $post) {
        $ids = Crypt::decrypt($id);
        $post = $post->find($ids);
        if($post) {
            if($post->is_active == 1) {
                $is_active = 0;
            } else {
                $is_active = 1;
            }
            $post->is_active = $is_active;
            $post->updated_at = date("Y-m-d H:i:s");
            $post->save();
        }

        return Redirect::intended ( '/news/administrator/view/'.$id);
    }

    public function edit($id,Post $post) {
        $id = Crypt::decrypt($id);
        return Theme::view ('news::Administrator.form',array(
            'post' =>  $post->find($id),
        ));
    }

    public function update(Post $post) {
        $id =  Input::has("id") ? Crypt::decrypt(Input::get("id")) : null;
        $title = Input::get("title");
        $category_id = 1;
        $type = "News";
        $total_view = 0;
        $content = Input::get("content");

        $field = array (
            'title' => $title,
            //'content' => $content,
        );

        $rules = array (
            'title' => 'required',
            //'content' => "required",
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
                $post = $post->find($id);
                $post->title  = $title;
                $post->category_id = $category_id;
                $post->content = $content;
                $post->updated_at = date("Y-m-d H:i:s");
                $post->save();
                $message = Lang::get('news::message.update successfully');
            } else {
                $post->title  = $title;
                $post->type = 'News';
                $post->category_id = $category_id;
                $post->content = $content;
                $post->total_view  = 0;
                $post->created_at = date("Y-m-d H:i:s");
                $post->created_by = Auth::user()->id;
                $post->updated_at = date("Y-m-d H:i:s");
                $post->updated_by = Auth::user()->id;
                $post->save();
                $message =  Lang::get('Post::message.insert successfully');
            }
            $params ['success'] =  true;
            $params ['redirect'] = url('/news/administrator/view/'.Crypt::encrypt($post->id));
            $params ['message'] =  $message;
        }

        return Response::json($params);
    }

    public function delete(Post $post) {
        $id = Crypt::decrypt(Input::get("id"));
        $is_exists = $post->select(['id'])->where('id',$id)->first();
        if($is_exists) {
            $post->where(['id' => $id])->delete();
            $params ['id'] =  $is_exists->id;
            $params ['success'] =  true;
            $params ['message'] =  Lang::get('news::message.delete successfully');
        }
        return Response::json($params);
    }

}