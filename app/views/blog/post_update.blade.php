@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>Actualizar Post</h1>
</div>

    <div class="tab-pane active" id="information">
        {{ Form::model($post, array('method' => 'post', 'files' => true, 'class'=>'form-horizontal', 'role' =>'form')) }}
        <div class="form-group">
            {{ Form::label('img', 'Imagen', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10" style="text-align: left;">
                <img src="{{ $photo[0]['file'] }}" alt="" style="width: 120px; text-align: left"/>
                {{ Form::file('image', Input::old('image'), array('placeholder' => 'Short content', 'class'=> 'form-control')) }}

            </div>
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Titulo', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10">
			{{ Form::text('title', Input::old('title'), array('placeholder' => 'Titulo', 'class'=> 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('shortContent', 'Introduccion', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::text('shortContent', Input::old('shortContent'), array('placeholder' => 'Short content', 'class'=> 'form-control')) }}
            </div>
        </div>
    </div>
			{{ Form::textArea('content', Input::old('content'), array('id'=> 'content')) }}
			

		<p>{{ Form::submit('Submit!', array('class'=>'saveInfoBlog btn btn-info')) }}</p>
		{{ Form::close() }}

@stop

@section('extra_scripts')
	<!-- Scripts Section -->
    <script src="{{ URL::asset('js/jquery.1.10.1.js') }}"></script>
    <script src="{{ URL::asset('packages/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
    	CKEDITOR.replace( 'content' );
    </script>
    <!-- End Scripts Section -->
@stop