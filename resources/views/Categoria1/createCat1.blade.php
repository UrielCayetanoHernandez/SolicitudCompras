@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')

<main>
    <div class="container py-4">
        <h2>Registro de Nuevo Rol</h2>

     @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

        <form action="{{url('Categoria1')}}" method="post">

        @csrf
        <div class="mb-3 row">
            <label for="nom_cat1" class="col-sm-2 col-form-label">Nombre Categoria</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nom_cat1" id="nom_cat1" value="{{old ('nom_cat1')}}" >
            </div>
        </div>
        <a href="{{url('Categoria1')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
