<?php
namespace Dashboard;
use BaseController;
use Project;
use Redirect;
use Validator;
use Session;
use Input;
use Photo;
use File;
use Response;
use View;
use path;

class ProjectController extends BaseController {

    public function getListProject(){
        $list = Project::where('status', 1)->paginate(5);
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
            'image' => 'required|image|max:3000',
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
            $project = new Project;
            $project->title       = Input::get('title');
            $project->type      = Input::get('type');
            $project->description = Input::get('description');
            $project->url = Input::get('url');
            $project->save();

            $file = Input::file('image');
            $photo = new Photo;
            $photo->model = 'projects';
            $photo->object_id = $project->id;
            $photo->save();
            $photo->upload_image($file);

            // store
            return Redirect::route('admin_projects');
        }
    }


    public function postUpload(){

        $input = Input::all();
        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $file = Input::file('file');

        $destinationPath = public_path().'/uploads/'.str_random(8);
        $filename = $file->getClientOriginalName();;
        //$extension =$file->getClientOriginalExtension();
        $upload_success = Input::file('file')->move($destinationPath, $filename);

        if( $upload_success ) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }

    }

    public function getUpdateProject(){

    }

    public function getDeleteProject($pk){
        $project = Project::find($pk);
        $project->status = 0;
        $project->save();
        return Redirect::route('admin_projects');
    }
}
