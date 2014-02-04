<?php

class HomeController extends BaseController {

	public function getIndex()
    {
        return View::make('web/homepage');
    }
    
	public function showLogin(){
		return View::make('web/login');
	}

	public function doLogin()
	{
		if(Request::ajax()){
			$rules = array(
				'email'    => 'required|email', // make sure the email is an actual email
				'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

			$messages = array(
				'required'=> 'Campo Obligatorio'
			);

			$validator = Validator::make(array('email' => Input::get('email'), 'password' => Input::get('password') ), true, $rules, $messages);

			if ($validator->fails()) {
				$data = array('status' => false,'msg' => $validator->getMessageBag()->toArray());
				return Response::json($data); 
			} else {
			    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 
			    if (Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password') ), true )){
			        $data = array('status'=>true,'msg'=>'Bienvenido!');
					return Response::json($data);
			    }else{
			        $data = array('status'=>false,'msg'=>'Datos incorrectos!');
					return Resonse::json($data);
			    }

			}
		}

	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('/blog')->with('msg','Gracias por su visita!');
	}
	
	public function showRegister(){
		return View::make('web/register');
	}

	public function doRegister()
	{	
		if(Request::ajax()){
			$rules = array(
				'email'    => 'required|email', // make sure the email is an actual email
				'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

			$messages = array(
				'required'=> 'Campo Obligatorio'
			);
			$validator = Validator(Input::all(), $rules, $messages);
			if($validator->fails()){
				$data = array('status'=>false,'msg'=>'Ingesa Correctamente');
				Response::json($data);
			}
			else{
				$inputs = Input::all();
				$inputs['password'] = Hash::make($inputs['password']);
				$user = User::create($inputs);
                $data = array('status'=>true,'msg'=>'Registrado Correctamente');
				Response::json($data);
			}
		}			
	}

	public function showDashboard()
	{		
		// return View::make('dashboard/dashboard');
		//return echo 'Bienvenido '. Auth::user()->email . ', su Id es: '.Auth::user()->id;
		return 'a';
    }


}