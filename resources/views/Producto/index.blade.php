@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')


<main>
    <div class="container py-4">
        <h2>Listado de Producto</h2>

        <a href="{{url('Rol/create')}}" class="btn btn-primary btn-sm">Nuevo Rol</a>
        <a href="{{url('Usuario/create')}}" class="btn btn-primary btn-sm">Nuevo Usuario</a>
        <a href="{{url('Categoria1/create')}}" class="btn btn-primary btn-sm">Nueva Categira 1</a>
        <a href="{{url('Categoria2/create')}}" class="btn btn-primary btn-sm">Nueva Categira 2</a>
        <a href="{{url('Producto/create')}}" class="btn btn-primary btn-sm">Nuevo Producto</a>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Unidad</th>
                    <th>Precio</th>
                    <th>Categoria1</th>
                    <th>Categoria2</th>
                    <th>Moficar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produc as $producs)
                <tr>
                    <td>{{$producs->id}}</td>
                    <td>{{$producs->clave}}</td>
                    <td>{{$producs->producto}}</td>
                    <td>{{$producs->Unidad}}</td>
                    <td>{{$producs->precioUni}}</td>
                    <td>{{$producs->catego1->nom_cat1}}</td>
                    <td>{{$producs->catego2->nom_cat2}}</td>


                    <td><a href="" class="btn btn-warning btn-sm">Editar</a></td>

                    <td><form action="" method="post">
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
