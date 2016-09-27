<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 27/09/2016
 * Time: 14:13
 */
namespace App\Modules\User\Http\Controllers\Administrator;

use Illuminate\Routing\Controller;
use App\Modules\User\Models\User;
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

}