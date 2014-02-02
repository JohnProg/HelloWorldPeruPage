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
        return View::make('dashboard.project.list')->with('projects',$list);
    }

    public function getData() {
//        $project = Project::find($pk);
//        $project->photos = $project->get_all_images();
//        return Response::json($project);
        echo 'hola';
    }

    public function getPhotos($pk) {
        $project = Project::find($pk);
        return Response::json($project->get_all_images());
    }

    public function getFormCreateProject(){
        return View::make('dashboard.project.create');
    }

    public function postCreateProject() {

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
                'message'=>'No se ha podido crear el proyecto',
                'option' =>'warning'
            ));
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $project = new Project;
            $project->title = Input::get('title');
            $project->type = Input::get('type');
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

    public function postUpload($id) {

        $input = Input::all();
        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $project = Project::find($id);

        $file = Input::file('file');
        $photo = new Photo;
        $photo->model = 'projects';
        $photo->object_id = $project->id;
        $photo->save();
        $photo->upload_image($file);
    }

    public function getUpdateProject($pk){
        $project = Project::find($pk);

        return View::make('dashboard.project.update')
            ->with('project', $project);
    }

    public function getDeletePhoto($pk){

        $photo = Photo::find($pk);
        $project_id = $photo->object_id;
        $photo->delete();
        File::delete($photo->file);
        return Redirect::route('admin_projects_update',array($project_id));
    }

    public function putUpdateProject($id){

        $rules = array(
            'title'       => 'required',
            'description'   => 'required',
            'url'   => 'required',
            'type' => 'required|numeric',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            Session::flash('message', array(
                'message'=>'No se ha actualizar el proyecto',
                'option' =>'warning'
            ));
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            // store
            $project = Project::find($id);
            $project->title = Input::get('title');
            $project->type = Input::get('type');
            $project->description = Input::get('description');
            $project->url = Input::get('url');
            $project->save();

            // redirect
            return Redirect::route('admin_projects_update', $project->id);
        }
    }

    public function getDeleteProject($pk){
        $project = Project::find($pk);
        $project->status = 0;
        $project->save();
        return Redirect::route('admin_projects');
    }
}
