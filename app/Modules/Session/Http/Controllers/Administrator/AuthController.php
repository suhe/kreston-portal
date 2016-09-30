<?php

/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 27/09/2016
 * Time: 10:43
 */
namespace App\Modules\Session\Http\Controllers\Administrator;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Lang;
use Response;
use Theme;
use Validator;

class AuthController extends Controller {
    public function __construct() {
        Theme::setActive("administrator");
    }

    public function index() {
        return Theme::view ('session::Administrator.index');
    }

    public function login() {
		if(Auth::check()) 
			return Redirect::intended('/user/administrator/');		
		
        $email = Input::get("email");
        $password = Input::get("password");

        $field = array (
            'email' => $email,
            'password' => $password,
        );

        $rules = array (
            'email' => "required|email",
            'password' => "required",
        );

        $validate = Validator::make($field,$rules);
        if($validate->fails()) {
            $params = array(
                'success' => false,
                'message' => $validate->getMessageBag()->toArray()
            );
        } else {
            if(!Auth::attempt($field,false)) {
                $params = array(
                    'success' => false,
                    'message' => array(
                        'email' => Lang::get("session::message.wrong email or password")
                    ),
                );

            } else {
                $params = array(
                    'success' => true,
                    'redirect' => url("user/administrator"),
                );
            }
        }

        return Response::json($params);
    }

    public function logout() {
        Auth::logout ();
        return Redirect::intended ( '/session/login');
    }

}