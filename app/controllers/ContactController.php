<?php

class ContactController extends BaseController {

    public function contactCreate()
    {
        $input = Input::all();
        $comment = new Comment;
        $comment->email = $input->email;
        $comment->subject = $input->subject;
        $comment->message = $input->message;

        $comment->save();

        return Redirect::route('home');
    }

    public function contactList(){
        $list = Comment::all();
        //$list = Comment::where('status','=',1)->get();
    }

    public function contactStatusRedirect(){

    }

}