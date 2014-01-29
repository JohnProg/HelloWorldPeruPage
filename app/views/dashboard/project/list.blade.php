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
            <td></td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <td>
                <a href="">Eliminar</a> |
                <a href="">Actualizar</a> |
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop