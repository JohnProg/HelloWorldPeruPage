@extends('../layouts.base')
{{ HTML::style('css/login.css') }}
@section('contenido')
	<section class="auth">		
		{{ Form::open(array('url' => 'register', 'class'=>'ajax')) }}
		<h1>Register</h1>

		<!-- if there are login errors, show them here -->
		

		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'john_js@agmail.com')) }}
			<p>{{ $errors->first('email') }}</p>
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
			<p>
				{{ $errors->first('password') }}
			</p>
		</p>

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