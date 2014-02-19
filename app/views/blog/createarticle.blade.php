@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>Crear Post</h1>
</div>

    <div class="tab-pane active" id="information">
        {{ Form::open(array('method' => 'POST','files' => true, 'class'=>'form-horizontal')) }}
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
        <div class="form-group">
            {{ Form::label('image', 'Imagen', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::file('image', Input::old('image'), array('placeholder' => 'url image', 'class'=> 'form-control')) }}
            </div>
        </div>
            {{ Form::textArea('content', Input::old('content'), array('id'=> 'content')) }}
    </div>
		<p>
        {{ Form::submit('Submit!', array('class'=>'saveInfoBlog btn btn-info')) }}</p>
		{{ Form::close() }}

@stop

@section('extra_scripts')
	<!-- Scripts Section -->
    <script src="/js/jquery.1.10.1.js"></script>
    <script src="/packages/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
    	CKEDITOR.replace( 'content' );
    </script>
    <!-- End Scripts Section -->
@stop