@extends('layouts.admin')

@section('contenido')
<div class="container">

    <div class="page-header">
        <h1>Mensajes</h1>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <td>Remitente</td>
                <td>Mensaje</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->email }}</td>
                    <td>{{ $comment->message }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>