<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 28/09/2016
 * Time: 14:28
 */
namespace App\Modules\ContactUs\Http\Controllers\Administrator;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\ContactUs\Models\ContactUs;
use Auth;
use Config;
use Crypt;
use Lang;
use Redirect;
use Request;
use Response;
use Setting;
use Theme;
use Validator;

class ContactUsController extends Controller {
    public function __construct() {
        Theme::setActive("administrator");
    }

    public function index(ContactUs $contact_us) {
        return Theme::view ('contact-us::Administrator.index',array(
            'contacts' =>  $contact_us
                ->where("name", "like", "%".Request::get("name")."%")
                ->sortable()->paginate(Setting::get_key('limit_page') ? Setting::get_key('limit_page') : Config::get('site.limit_page')),
        ));
    }

    public function create() {
        return Theme::view ('contact-us::Administrator.form',array(
            'event' =>  null,
        ));
    }

    /*public function view($id,ContactUs $contact_us,GalleryPhoto $photo) {
        $id = Crypt::decrypt($id);
        return Theme::view ('contact-us::Administrator.view',array(
            'event' =>  $contact_us->selectRaw("*,DATE_FORMAT(date_from,'%d/%m/%Y') as date_from,DATE_FORMAT(date_to,'%d/%m/%Y') as date_to")->find($id),
            'photos' => $photo->where("contact-us_event_id",$id)->paginate(1),
        ));
    }*/

    public function status($id,ContactUs $contact_us) {
        $ids = Crypt::decrypt($id);
        $contact_us = $contact_us->find($ids);
        if($contact_us) {
            if($contact_us->is_active == 1) {
                $is_active = 0;
            } else {
                $is_active = 1;
            }
            $contact_us->is_active = $is_active;
            $contact_us->updated_at = date("Y-m-d H:i:s");
            $contact_us->save();
        }

        return Redirect::intended ( '/contact-us/administrator');
    }

    public function edit($id,ContactUs $contact_us) {
        $id = Crypt::decrypt($id);
        return Theme::view ('contact-us::Administrator.form',array(
            'contact' =>  $contact_us->selectRaw("*")->find($id),
        ));
    }

    public function update(ContactUs $contact_us) {
        $id =  Input::has("id") ? Crypt::decrypt(Input::get("id")) : null;
        $name = Input::get("name");
        $contact_name = Input::get("contact_name");
        $address = Input::get("address");
        $city = Input::get("city");
        $country = Input::get("country");
        $phone_number = Input::get("phone_number");
        $fax_number = Input::get("fax_number");
        $email = Input::get("email");
        $website = Input::get("website");

        $field = array (
            'name' => $name,
            'contact_name' => $contact_name,
            'address' => $address,
            'city' => $city,
            'country' => $country,
            'phone_number' => $phone_number,
            'fax_number' => $fax_number,
            'email' => $email,
        );

        $rules = array (
            'name' => 'required',
            'contact_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone_number' => 'required',
            'fax_number' => 'required',
            'email' => 'required|email',
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
                $contact_us = $contact_us->find($id);
                $contact_us->name  = $name;
                $contact_us->contact_name  = $contact_name;
				$contact_us->address = $address;
                $contact_us->city = $city;
                $contact_us->country = $country;
                $contact_us->phone_number = $phone_number;
                $contact_us->fax_number = $fax_number;
                $contact_us->email = $email;
                $contact_us->website = $website;
                $contact_us->updated_at = date("Y-m-d H:i:s");
				$contact_us->updated_by = Auth::user()->id;
                $contact_us->save();
                $message = Lang::get('contact-us::message.update successfully');
            } else {
                $contact_us->name  = $name;
                $contact_us->contact_name  = $contact_name;
                $contact_us->address = $address;
                $contact_us->city = $city;
                $contact_us->country = $country;
                $contact_us->phone_number = $phone_number;
                $contact_us->fax_number = $fax_number;
                $contact_us->email = $email;
                $contact_us->website = $website;
                $contact_us->created_at = date("Y-m-d H:i:s");
                $contact_us->created_by = Auth::user()->id;
                $contact_us->updated_at = date("Y-m-d H:i:s");
                $contact_us->updated_by = Auth::user()->id;
                $contact_us->save();
                $message =  Lang::get('contact-us::message.insert successfully');
            }
            $params ['success'] =  true;
            $params ['redirect'] = url('/contact-us/administrator');
            $params ['message'] =  $message;
        }

        return Response::json($params);
    }

    public function delete(ContactUs $contact_us) {
        $id = Crypt::decrypt(Input::get("id"));
        $is_exists = $contact_us->select(['id'])->where('id',$id)->first();
        if($is_exists) {
            $contact_us->where(['id' => $id])->delete();
            $params ['id'] =  $is_exists->id;
            $params ['success'] =  true;
            $params ['message'] =  Lang::get('contact-us::message.delete successfully');
        }
        return Response::json($params);
    }

}