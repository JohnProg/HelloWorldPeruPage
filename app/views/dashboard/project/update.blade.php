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
    <li><a href="#upload" data-toggle="tab">Subir</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="information">
        {{ Form::model($project, array('route' => array('admin_projects_update_form', $project->id), 'method' => 'PUT', 'class'=>'form-horizontal', 'role' =>'form')) }}

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
    <div class="tab-pane" id="photos" ng-app="listApp">


        <div class="container marketing" ng-controller="listController" ng-init="init()">

            <!-- Three columns of text below the carousel -->
            <div class="row" ng-repeat="item in pagedItems[currentPage]" class="ng-cloak">
                <div class="col-lg-3" >
                    <img src="{[{ item.thumbnails[0].file }]}" alt="..." class="img-rounded">
                    <p><a class="btn btn-danger" href="{{ URL::to('admin/projects/photo/delete/') }}/{[{ item.id }]}" role="button">Delete</a></p>
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->

        </div>
    </div>
    <div class="tab-pane" id="upload">
        <form action="{{ URL::route('admin_projects_photo_upload', $project->id); }}" class="dropzone" id="my-awesome-dropzone" method="PUT"></form>
    </div>
</div>

@stop

@section('extra_scripts')
@parent
{{ HTML::script('js/dropzone.js') }}
{{ HTML::script('js/modules/list/app.js') }}
{{ HTML::script('js/modules/list/controller.js') }}
{{ HTML::script('js/modules/list/listFactory.js') }}

<script>
    angular.module('listApp').value('listUrls', {
        dataUrl: "{{ URL::route('admin_projects_data_photo_json', $project->id); }}"
    });

</script>

@stop