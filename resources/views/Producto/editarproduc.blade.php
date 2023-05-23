@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar Producto</h2>

     @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

        <form action="{{url('Producto/'.$pro->id)}}" method="post">
            @method("PUT")
        @csrf
        <div class="mb-3 row">
            <label for="clave" class="col-sm-2 col-form-label">Clave</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="clave" id="clave" value="{{$pro->clave}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="clave" class="col-sm-2 col-form-label">Nombre Producto</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="clave" id="clave" value="{{$pro->producto}}" >
            </div>
        </div>
        <a href="{{url('Producto')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
