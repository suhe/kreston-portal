<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 28/09/2016
 * Time: 14:28
 */
namespace App\Modules\JobVacancy\Http\Controllers\Administrator;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\JobVacancy\Models\JobVacancy;
use Auth;
use Crypt;
use Lang;
use Redirect;
use Request;
use Response;
use Theme;
use Validator;

class JobVacancyController extends Controller {
    public function __construct() {
        Theme::setActive("administrator");
    }

    public function index(JobVacancy $job) {
        return Theme::view ('job-vacancy::Administrator.index',array(
            'jobs' =>  $job
                ->where("name", "like", "%".Request::get("name")."%")
                ->sortable()->paginate(2),
        ));
    }

    public function create() {
        return Theme::view ('job-vacancy::Administrator.form',array(
            'job' =>  null,
        ));
    }

    public function view($id,JobVacancy $job) {
        $id = Crypt::decrypt($id);
        return Theme::view ('job-vacancy::Administrator.view',array(
            'job' =>  $job->find($id),
        ));
    }

    public function status($id,JobVacancy $job) {
        $ids = Crypt::decrypt($id);
        $job = $job->find($ids);
        if($job) {
            if($job->is_active == 1) {
                $is_active = 0;
            } else {
                $is_active = 1;
            }
            $job->is_active = $is_active;
            $job->updated_at = date("Y-m-d H:i:s");
            $job->save();
        }

        return Redirect::intended ( '/job-vacancy/administrator/view/'.$id);
    }

    public function edit($id,JobVacancy $job) {
        $id = Crypt::decrypt($id);
        return Theme::view ('job-vacancy::Administrator.form',array(
            'job' =>  $job->find($id),
        ));
    }

    public function update(JobVacancy $job) {
        $id =  Input::has("id") ? Crypt::decrypt(Input::get("id")) : null;
        $name = Input::get("name");
		$position = Input::get("position");
        $location = Input::get('location');
        $due_date = Input::get('due_date');
		$description = Input::get('description');
		$requirements = Input::get('requirements');
		$responsibilites = Input::get('responsibilites');

        $field = array (
            'name' => $name,
            'position' => $position,
            'location' => $location,
			'due_date' => $due_date,
			'description' => $description,
			'requirements' => $requirements,
			'responsibilites' => $responsibilites
        );

        $rules = array (
            'name' => 'required',
            'position' => 'required',
            'location' => 'required',
			'due_date' => 'required',
			'description' => 'required',
			'requirements' => 'required',
			'responsibilites' => 'required'
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
                $job = $job->find($id);
                $job->name  = $name;
                $job->location = $location;
                $job->description = $description;
				$job->position = $position;
				$job->due_date = $date;
				$job->responsibilites = $responsibilites;
				$job->requirements = $requirements;
                $job->updated_at = date("Y-m-d H:i:s");
				$job->updated_by = Auth::user()->id;
                $job->save();
                $message = Lang::get('job-vacancy::message.update successfully');
            } else {
                $job->name  = $name;
                $job->location = $location;
                $job->description = $description;
				$job->position = $position;
				$job->due_date = $date;
				$job->responsibilites = $responsibilites;
				$job->requirements = $requirements;
                $job->created_at = date("Y-m-d H:i:s");
                $job->created_by = Auth::user()->id;
                $job->updated_at = date("Y-m-d H:i:s");
                $job->updated_by = Auth::user()->id;
                $job->save();
                $message =  Lang::get('job-vacancy::message.insert successfully');
            }
            $params ['success'] =  true;
            $params ['redirect'] = url('/job-vacancy/administrator/view/'.Crypt::encrypt($job->id));
            $params ['message'] =  $message;
        }

        return Response::json($params);
    }

    public function delete(JobVacancy $job) {
        $id = Crypt::decrypt(Input::get("id"));
        $is_exists = $job->select(['id'])->where('id',$id)->first();
        if($is_exists) {
            $job->where(['id' => $id])->delete();
            $params ['id'] =  $is_exists->id;
            $params ['success'] =  true;
            $params ['message'] =  Lang::get('job-vacancy::message.delete successfully');
        }
        return Response::json($params);
    }

}