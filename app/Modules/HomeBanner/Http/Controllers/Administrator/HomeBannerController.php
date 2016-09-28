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

    public function update(HomeBanner $home_banner) {
        $id =  Input::has("id") ? Crypt::decrypt(Input::get("id")) : null;
        $name = Input::get("name");
        $storage_location = str_replace(url("/"),"",Input::get('filepath'));
        $description = Input::get('description');

        $field = array (
            'name' => $name,
            'storage_location' => $storage_location,
            'description' => $description,
        );

        $rules = array (
            'name' => 'required',
            'storage_location' => "required",
            'password' => "required"
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
                $home_banner = $home_banner->find($id);
                $home_banner->name  = $name;
                $home_banner->storage_location = $storage_location;
                $home_banner->updated_at = date("Y-m-d H:i:s");
                $home_banner->save();
                $message = Lang::get('home-banner::message.update successfully');
            } else {
                $home_banner->name  = $name;
                $home_banner->storage_location = $storage_location;
                $home_banner->created_at = date("Y-m-d H:i:s");
                $home_banner->created_by = Auth::user()->getId();
                $home_banner->updated_at = date("Y-m-d H:i:s");
                $home_banner->updated_by = Auth::user()->getId();
                $home_banner->save();
                $message =  Lang::get('home-banner::message.insert successfully');
            }
            $params ['success'] =  true;
            $params ['redirect'] = url('/home-banner/administrator/view/'.Crypt::encrypt($user->id));
            $params ['message'] =  $message;
        }


    }

}