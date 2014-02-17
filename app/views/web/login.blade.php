@extends('layouts.base')
{{ HTML::style('css/login.css') }}
@section('contenido')
	<section class="auth">
	{{ Form::open(array('url' => 'login', 'class'=>'ajax')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<div class='input-group'>
			<span class='input-group-addon'><i class='fa fa-user'></i></span>
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'Your email', 'class'=> 'form-control')) }}
			<div class='msm email'></div>
		</div><br>
		<div class='input-group'>
			<span class='input-group-addon'><i class='fa fa-key'></i></span>
			{{ Form::password('password', array('placeholder' => 'Your password', 'class'=> 'form-control')) }}
			<div class='msm password'></div>
		</div>

		<p>{{ Form::submit('Submit!', array('class'=>'btn btn-info')) }}</p>
	{{ Form::close() }}
	</section>	
@stop
@section('script')
	<!-- Scripts Section -->
    <script src="js/jquery.1.10.1.js"></script>
    {{ HTML::script('js/login.js') }}
    <!-- End Scripts Section -->
@stop