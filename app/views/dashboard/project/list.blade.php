@extends('layouts.admin')

@section('content')
<div class="container hello">

    <h1> Proyectos
        <small>
        <span class="btn-group">
            <a href="{{ URL::route('admin_projects_create'); }}" type="button" class="btn btn-primary">Nuevo</a>
        </span>
        </small>
    </h1>
    <hr/>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Imagen</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
        <tr>
            <td><img src="{{ $project->get_main_image() }}" style="width: 120px;height: 80px;"/> </td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <td>
                <a href="{{ URL::route('admin_projects_delete', $project->id ); }}">Eliminar</a> |
                <a href="">Actualizar</a> |
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $projects->links(); }}
</div>
@stop