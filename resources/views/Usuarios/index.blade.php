@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')


<main>
    <div class="container py-4">
        <h2>Listado de Usuarios</h2>

        <a href="{{url('Usuario/create')}}" class="btn btn-primary btn-sm">Nuevo Usuario</a>

    </div>


</main>
