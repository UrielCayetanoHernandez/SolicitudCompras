@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')

<main>
    <div class="container py-4">
        <h2>Registro de Nuevo Producto</h2>

     @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

        <form action="{{url('Producto')}}" method="post">

        @csrf
        <div class="mb-3 row">
            <label for="clave" class="col-sm-2 col-form-label">Clave</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="clave" id="clave" value="{{old ('clave')}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="producto" class="col-sm-2 col-form-label">Producto </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="producto" id="producto" value="{{old ('producto')}}" >
            </div>
        </div>

        <a href="{{url('Categoria2')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
