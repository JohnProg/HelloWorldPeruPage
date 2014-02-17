<?php

class HomeController extends BaseController {

	public function getIndex()
    {
        return View::make('web/homepage');
    }
    
	public function showLogin(){
		return View::make('web/login');
	}
    public function showTest(){
        return View::make('web/test');
    }

	public function doLogin()
	{
		if(Request::ajax()){

			$rules = array(
				'email'    => 'required|email', // make sure the email is an actual email
				'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

            $validator = Validator::make(Input::all(), $rules);
			if ($validator->fails()) {
				$data = array('status' => false,'msg' => $validator->getMessageBag()->toArray());
				return Response::json($data);
			} else {
			    if (Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password') ), true )){
			        $data = array('status'=>true,'msg'=>'Bienvenido!');
					return Response::json($data);
			    }else{
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
		return View::make('web/register');
	}

	public function doRegister()
	{	
		if(Request::ajax()){
			$rules = array(
				'name' => 'required|min:3',
				'username' => 'required|min:3',
				'email'    => 'required|email', // make sure the email is an actual email
				'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

			$messages = array(
				'required'=> 'Campo Obligatorio'
			);
			$validator = Validator::make(Input::all(), $rules, $messages);
			if($validator->fails()){
				$data = array('status'=>false,'msg'=>'Ingesa Correctamente');
				return Response::json($data);
			}
			else{
				$inputs = Input::all();
				$inputs['password'] = Hash::make($inputs['password']);
				$user = User::create($inputs);
                $data = array('status'=>true,'msg'=>'Registrado Correctamente');
				return Response::json($data);
			}
		}			
	}

	public function showDashboard()
	{		
		return Redirect::to('/admin/blog/posts')->with('msg','Bienvenido!');
    }


}