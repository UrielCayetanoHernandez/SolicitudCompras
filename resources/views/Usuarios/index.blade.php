@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')


<main>
    <div class="container py-4">
        <h2>Listado de Usuarios</h2>

        <a href="{{url('Usuario/create')}}" class="btn btn-primary btn-sm">Nuevo Usuario</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre Completo</th>
                    <th>Clave</th>
                    <th>Password</th>
                    <th>Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuar as $usu)
                <tr>


                </tr>

                @endforeach
            </tbody>

        </table>

    </div>


</main>
