@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')


<main>
    <div class="container py-4">
        <h2>Listado de Categoria 2</h2>

        <a href="{{url('Rol/create')}}" class="btn btn-primary btn-sm">Nuevo Rol</a>
        <a href="{{url('Usuario/create')}}" class="btn btn-primary btn-sm">Nuevo Usuario</a>
        <a href="{{url('Categoria1/create')}}" class="btn btn-primary btn-sm">Nueva Categira 1</a>
        <a href="{{url('Categoria2/create')}}" class="btn btn-primary btn-sm">Nueva Categira 2</a>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    <th>Moficar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categori2 as $categoria2s)
                <tr>
                    <td>{{$categoria2s->id}}</td>
                    <td>{{$categoria2s->nom_cat2}}</td>

                    <td><a href="{{ url('Categoria2/'.$categoria2s->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>

                    <td><form action="{{url('Categoria2/'.$categoria2s->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form> </td>

                </tr>

                @endforeach
            </tbody>

        </table>

    </div>


</main>
