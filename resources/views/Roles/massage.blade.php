@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')

<main>
    <div class="container py-4">
        <h2>
            {{$msg}}
        </h2>

        <a href="{{url('Rol')}}" class="btn btn-secondary">Regresar</a>

    </div>

</main>
