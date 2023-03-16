@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')


<main>
    <div class="container py-4">
        <h2>Listado de Roles</h2>

        <a href="{{url('Rol/create')}}" class="btn btn-primary btn-sm">Nuevo Rol</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre Rol</th>
                    <th>Descripcion</th>
                    <th>Moficar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->nom_rol}}</td>
                    <td>{{$role->descri_rol}}</td>
                    <td><a href="{{ url('Rol/'.$role->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>

                    <td><form action="{{url('Rol/'.$role->id)}}" method="post">
                        @method("DELETE")
                        @csrf

                    </form> </td>

                </tr>

                @endforeach
            </tbody>

        </table>

    </div>


</main>
