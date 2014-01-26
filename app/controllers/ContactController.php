<?php

class ContactController extends BaseController {

    public function postContactCreate()
    {
        $data = array();
        Mail::send('emails.welcome', $data, function($message)
        {
            $message->to('jonathancg90@gmail.com', 'Jonathan')->subject('Bienvenido');
        });


//        $input = Input::except('_token');
//        $comment = new Comment;
//        $comment->name = $input['name'];
//        $comment->email = $input['email'];
//        $comment->subject = $input['subject'];
//        $comment->message = $input['message'];
//        $comment->save();
//
//        //echo $comment;
//        return Redirect::route('home');
    }

    public function contactList(){
        $list = Comment::all();
        //$list = Comment::where('status','=',1)->get();
    }

    public function contactStatusRedirect(){

    }

    public function getTest(){
        echo "hola";
    }

}