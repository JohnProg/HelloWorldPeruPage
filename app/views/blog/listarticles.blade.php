@extends('layouts.admin')

@section('content')
<div class="container hello">

    <h1> Posts
        <small>
        <span class="btn-group">
            <a href="{{ URL::route('blog_create'); }}" type="button" class="btn btn-primary">Nuevo</a>
        </span>
        </small>
    </h1>
    <hr/>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>
                <a href="{{ URL::route('admin_projects_delete', $post->id ); }}">Eliminar</a> |
                <a href="{{ URL::route('admin_projects_update', $post->id ); }}">Actualizar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $posts->links(); }}
</div>
@stop