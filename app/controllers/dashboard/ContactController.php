<?php
namespace Dashboard;
use BaseController;
use Comment;
use View;

class ContactController extends BaseController {

    public function getListComment(){
        $list = Comment::all();
        return View::make('dashboard/message');
    }

    public function getDeleteComment(){
        $list = Comment::all();
        echo $list;
    }
}
