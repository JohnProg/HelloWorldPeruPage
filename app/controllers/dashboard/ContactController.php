<?php
namespace Dashboard;
use BaseController;
use Comment;
use View;
use Redirect;

class ContactController extends BaseController {

    public function getListComment(){
        $list = Comment::where('status', 1)->paginate(5);
        return View::make('dashboard/message')->with('comments',$list);
    }

    public function getDeleteComment($pk){
        $comment = Comment::find($pk);
        $comment->status = 0;
        $comment->save();
        return Redirect::route('admin_messages');
    }
}
