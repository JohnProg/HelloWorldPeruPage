<?php

class ContactController extends BaseController {

    public function postContactCreate()
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        );

        $validator = Validator::make(Input::all(),$rules);

        if ($validator->passes()) {
            $input = Input::except('_token');
            $comment = new Comment;
            $comment->name = $input['name'];
            $comment->email = $input['email'];
            $comment->subject = $input['subject'];
            $comment->message = $input['message'];
            $comment->save();

            $data = array(
                'name'=>$input['name'],
                'email'=>$input['email'],
                'subject'=>$input['subject'],
                'text'=>$input['message']
            );

            Mail::send('emails.contact', $data, function($message)
            {
                $message->to('team@helloworldperu.com', 'Team')->subject('Contact Us');
            });

            Session::flash('message', array(
                'message'=>'Su mensaje ha sido enviado con exito',
                'option' =>'success'
            ));

            return Redirect::route('home');
        } else {
            Session::flash('message', array(
                'message'=>'Ha ocurrido un error al enviar el mensaje',
                'option' =>'warning'
            ));
            return Redirect::back()->withInput()->withErrors($validator);
        }

    }

    public function contactStatusRedirect(){

    }

}