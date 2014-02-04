@extends('layouts.base')
{{ HTML::style('css/login.css') }}
@section('contenido')
	<section class="auth">		
		{{ Form::open(array('url' => 'register', 'class'=>'ajax')) }}
		<h1>Register</h1>

		<div class='input-group first-error'>
			<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'john_js@agmail.com', 'class'=> 'form-control')) }}
		</div>

		<div class='input-group'>
			<span class='input-group-addon'><i class='fa fa-user'></i></span>
			{{ Form::password('password', array('placeholder'=>'******', 'class'=> 'form-control')) }}
		</div>

		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}
	</section>	
@stop
@section('script')
	<!-- Scripts Section -->
    <script src="js/jquery.1.10.1.js"></script>
    {{ HTML::script('js/login.js') }}
    <!-- End Scripts Section -->
@stop