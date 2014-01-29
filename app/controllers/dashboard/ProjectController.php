<?php
namespace Dashboard;
use BaseController;
use Project;
use Redirect;
use Validator;
use Session;
use Input;
use View;

class ProjectController extends BaseController {

    public function getListProject(){
        $list = Project::all();
        return View::make('dashboard/project/list')->with('projects',$list);

    }

    public function getFormCreateProject(){
        return View::make('dashboard.project.create');
    }
    public function postCreateProject(){

        $rules = array(
            'title'       => 'required',
            'description'   => 'required',
            'url'   => 'required',
            'type' => 'required|numeric',
            'image' => 'image|max:3000',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            Session::flash('message', array(
                'message'=>'No se ha podido crear el prouyecto',
                'option' =>'warning'
            ));
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            // store
            $file = Input::file('image');

            $extension = File::extension($file['name']);
            $directory = path('public').'uploads/'.sha1(time());
            $filename = sha1(time().time()).".{$extension}";

            $upload_success = Input::upload('file', $directory, $filename);

            $project = new Project;
            $project->title       = Input::get('title');
            $project->type      = Input::get('type');
            $project->description = Input::get('description');
            $project->url = Input::get('url');
            $project->save();

            // redirect
            return Redirect::route('admin_projects');
        }
    }

    public function getUpdateProject(){

    }

    public function getDeleteProject(){

    }
}
