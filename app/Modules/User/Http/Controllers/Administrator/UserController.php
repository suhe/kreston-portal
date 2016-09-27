<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 27/09/2016
 * Time: 14:13
 */
namespace App\Modules\User\Http\Controllers\Administrator;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\User\Models\User;
use Crypt;
use Lang;
use Theme;

class UserController extends Controller {
    public function __construct() {
        Theme::setActive("administrator");
    }

    public function index(User $user) {
        return Theme::view ('user::Administrator.index',array(
            'users' =>  $users = $user->sortable()->paginate(2),
        ));
    }
	
	public function view($id , User $user) {
		$id = Crypt::decrypt($id);
		return Theme::view ('user::Administrator.view',array(
            'user' =>  $user->find($id),
        ));
	}
	
	public function edit($id,User $user) {
		$id = Crypt::decrypt($id);
		return Theme::view ('user::Administrator.form',array(
            'user' =>  $user->find($id),
        ));
	}
	
	public function update(User $user) {
		$user_id = Crypt::decrypt(Input::get("id"));
		$first_name = Input::get('first_name');
		$last_name = Input::get('last_name');
		$email = Input::get('email');
		
		$is_exist = $user->where('email', $email)->where('id', '!=', $user_id)->get(array('id'))->first();
		
		if($is_exist) {
			$params ['success'] =  false;
			$params ['message'] =  Lang::get('users::message.unique email');
		} else {
			if(!empty($user_id)) {
				//update user
				$user = $user->find($user_id);
				$user->first_name  = $first_name;
				$user->last_name = $last_name;
				$user->email = $email;
				$user->updated_at = date("Y-m-d H:i:s");
				$user->save();
				
				$params ['success'] =  true;
				$params ['redirect'] = url('/user/administrator/view/'.Crypt::encrypt($user->id));
				$params ['message'] =  Lang::get('users::message.insert successfully');
			} 
		}
		
		return json_encode($params);
	}

}