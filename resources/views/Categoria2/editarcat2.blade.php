@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar Categoria 2</h2>

     @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

        <form action="{{url('Categoria2/'.$categori2->id)}}" method="post">
            @method("PUT")
        @csrf
        <div class="mb-3 row">
            <label for="nom_cat2" class="col-sm-2 col-form-label">Nombre Categoria</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nom_cat2" id="nom_cat2" value="{{$categori2->nom_cat2}}" >
            </div>
        </div>
        <a href="{{url('Categoria1')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
