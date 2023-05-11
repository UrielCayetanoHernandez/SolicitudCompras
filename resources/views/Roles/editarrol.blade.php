@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar Rol</h2>

     @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

        <form action="{{url('Rol/'.$roles->id)}}" method="post">
            @method("PUT")
        @csrf
        <div class="mb-3 row">
            <label for="nom_rol" class="col-sm-2 col-form-label">Nombre Rol</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nom_rol" id="nom_rol" value="{{$roles->nom_rol}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="descri_rol" class="col-sm-2 col-form-label">Descripcion Rol</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="descri_rol" id="descri_rol" value="{{$roles->descri_rol}}" >
            </div>
        </div>
        <a href="{{url('Rol')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
