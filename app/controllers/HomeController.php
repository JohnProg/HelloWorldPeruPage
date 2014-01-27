<?php

class HomeController extends BaseController {

	public function getIndex()
    {
        return View::make('home');
    }
    
	public function showLogin(){
		return View::make('auth/login');
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
			$validator = Validator::make(Input::all(), $rules, $messages);

			if ($validator->fails()) {
				$data = array('status' => false,'msg' => $validator->getMessageBag()->toArray());
				return Response::json($data); 
			} else {

				$userdata = array(
					'email' 	=> Input::get('email'),
					'password' 	=> Input::get('password')
				);

				if (Auth::attempt($userdata)) {					
					$data = array('status'=>true,'msg'=>'Bienvenido!');
					return Response::json($data);

				} else {	 	
					$data = array('status'=>false,'msg'=>'Datos incorrectos!');
					return Response::json($data);

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
		return View::make('auth/register');
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
                $inputs['clave'] = Hash::make(Input::get('clave'));
				$user = User::create(Input::all());
				$data = array('status'=>true,'msg'=>'Registrado Correctamente');
				Response::json($data);

			}
		}			
	}

	public function showDashboard()
	{		
		// return View::make('dashboard/dashboard');
		return 'Bienvenido '. Auth::user()->email . ', su Id es: '.Auth::user()->id;
	}


}