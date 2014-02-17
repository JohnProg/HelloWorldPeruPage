@extends('layouts.base')
{{ HTML::style('css/login.css') }}
@section('contenido')
	<section class="auth">		
		{{ Form::open(array('url' => 'register', 'class'=>'ajax')) }}
		<h1>Register</h1>
		
		<div class='input-group'>
			<span class='input-group-addon'><i class='fa fa-smile-o'></i></span>
			{{ Form::text('name', Input::old('name'), array('placeholder'=>'Name', 'class'=> 'form-control')) }}
		</div><br>
		<div class='input-group'>
			<span class='input-group-addon'><i class='fa fa-user'></i></span>
			{{ Form::text('username', Input::old('username'), array('placeholder'=>'Username', 'class'=> 'form-control')) }}
		</div><br>
		<div class='input-group first-error'>
			<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'Email', 'class'=> 'form-control')) }}
		</div>
<br>
		<div class='input-group'>
			<span class='input-group-addon'><i class='fa fa-key'></i></span>
			{{ Form::password('password', array('placeholder'=>'******', 'class'=> 'form-control')) }}
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