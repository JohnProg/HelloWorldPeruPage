<?php
namespace Dashboard;
use BaseController;
use Comment;

class ProjectController extends BaseController {

    public function getListProject(){
        $list = Comment::all();
        echo $list;
    }

    public function getCreateProject(){

    }

    public function getUpdateProject(){

    }

    public function getDeleteProject(){

    }
}
