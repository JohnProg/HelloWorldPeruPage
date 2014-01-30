@extends('layouts.admin')

@section('extra_styles')
@parent
{{ HTML::style('css/dropzone.css');}}
@stop

@section('content')
<div class="page-header">
    <h1>Crear Proyecto</h1>
</div>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#information" data-toggle="tab">Informacion</a></li>
    <li><a href="#photos" data-toggle="tab">Fotos</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="information">
        {{ Form::open(array('route' => 'admin_projects_save', 'class'=>'form-horizontal', 'role' =>'form')) }}

        <div class="form-group">
            {{ Form::label('title', 'Titulo', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'id' => 'title' )) }}
                {{ $errors->first('title', '<span class="text-error">:message</span>') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Descripcion', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::text('description', Input::old('desription'), array('class' => 'form-control', 'id' => 'description' )) }}
                {{ $errors->first('description', '<span class="text-error">:message</span>') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('type', 'Tipo', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::select('type', array('0' => 'Select a category', '1' => 'Web', '2' => 'App ', '3' => 'Desing'), Input::old('type'), array('class' => 'form-control')) }}
                {{ $errors->first('type', '<span class="text-error">:message</span>') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('url', 'url', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::text('url', Input::old('url'), array('class' => 'form-control')) }}
                {{ $errors->first('url', '<span class="text-error">:message</span>') }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
            </div>
        </div>

        {{ Form::close() }}


    </div>
    <div class="tab-pane" id="photos">
        <form action="{{ url('admin/projects/photos/upload')}}" class="dropzone" id="my-awesome-dropzone"></form>
    </div>
</div>

@stop

@section('extra_scripts')
@parent
{{ HTML::script('js/dropzone.js') }}
@stop