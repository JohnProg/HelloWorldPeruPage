@extends('layouts.base')
{{ HTML::style('css/login.css') }}
@section('contenido')
	<section class="auth">
	{{ Form::open(array('method' => 'POST')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<div class='input-group first-error'>
			<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
			{{ Form::text('title', Input::old('title'), array('placeholder' => 'Titulo', 'class'=> 'form-control')) }}
			{{ Form::textArea('content', Input::old('content'), array('id'=> 'content')) }}
			<div class='msm email'></div>
		</div>

		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}
	</section>	
@stop
@section('script')
	<!-- Scripts Section -->
    <script src="/js/jquery.1.10.1.js"></script>
    <script src="/packages/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
    	CKEDITOR.replace( 'content' );
    </script>
    <!-- End Scripts Section -->
@stop