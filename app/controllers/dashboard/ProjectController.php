<?php
namespace Dashboard;
use BaseController;
use Project;
use View;

class ProjectController extends BaseController {

    public function getListProject(){
        $list = Project::all();
        return View::make('dashboard/project/list')->with('projects',$list);

    }

    public function getCreateProject(){

    }

    public function getUpdateProject(){

    }

    public function getDeleteProject(){

    }
}
