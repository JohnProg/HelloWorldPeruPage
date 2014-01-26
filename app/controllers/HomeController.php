<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

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

				// create our user data for the authentication
				$userdata = array(
					'email' 	=> Input::get('email'),
					'password' 	=> Input::get('password')
				);

				// attempt to do the login
				if (Auth::attempt($userdata)) {

					// validation successful!
					// redirect them to the secure section or whatever
					// return Redirect::to('secure');
					// for now we'll just echo success (even though echoing in a controller is bad)					
					$data = array('status'=>true,'msg'=>'Bienvenido!');
					return Response::json($data);

				} else {	 	
					$data = array('status'=>false,'msg'=>'Datos incorrectos!');
					return Response::json($data);
					// return 'bad';

				}

			}
		}

	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('/blog')->with('msg','Gracias por su visita!');
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
				Input::get('password') = Hash::make(Input::get('password'));
				$user = User::create(Input::all());
				$data = array('status'=>true,'msg'=>'Registrado Correctamente');
				Response::json($data);

			}
		}			
	}

	public function showDashboard()
	{		
		// return View::make('dashboard/dashboard');
		return echo 'Bienvenido '. Auth::user()->email . ', su Id es: '.Auth::user()->id;
	}

}