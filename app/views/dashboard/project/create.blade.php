@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h1>Crear Proyecto</h1>
</div>

    <div class="tab-pane active" id="information">
        {{ Form::open(array('route' => 'admin_projects_save', 'files' => true, 'class'=>'form-horizontal', 'role' =>'form')) }}

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
            {{ Form::label('image', 'imnage', array('class'=>'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::file('image', Input::old('image'), array('class' => 'form-control')) }}
                {{ $errors->first('image', '<span class="text-error">:message</span>') }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
            </div>
        </div>

        {{ Form::close() }}

@stop