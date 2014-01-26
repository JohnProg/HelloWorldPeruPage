<?php

class ContactController extends BaseController {

    public function contactCreate()
    {
        //Obtener parametros
        $input = Input::all();
        //registrar en BD

        //Enviar correo

        return Redirect::route('home');
    }

}