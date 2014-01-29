@extends('layouts.admin')

@section('content')
<div class="container hello">

    <div class="page-header">
        <h1>Mensajes</h1>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Remitente</th>
                <th>Mensaje</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->email }}</td>
                    <td>{{ $comment->message }}</td>
                    <td><a href="{{ URL::route('admin_messages_delete', 1); }}">Eliminar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop