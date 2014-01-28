<?php
namespace Dashboard;
use BaseController;
use Comment;

class ProjectController extends BaseController {

    public function getList(){
        $list = Comment::all();
        echo $list;
    }
}
