@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')

<main>
    <div class="container py-4">
        <h2>Registro de Nuevo Usuario</h2>

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach(@errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{url('Usuario')}}" method="post">

        @csrf
        <div class="mb-3 row">
            <label for="nom_comple" class="col-sm-2 col-form-label">Nombre Completo</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nom_comple" id="nom_comple" value="{{old ('nom_comple')}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="clave" class="col-sm-2 col-form-label">Clave de Acceso</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="clave" id="clave" value="{{old ('clave')}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="password" id="password" value="{{old ('password')}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="rol_id" class="col-sm-2 col-form-label">Rol</label>
            <div class="col-sm-5">
               <select name="rol_id" id="rol_id" class="form-select" >
                    <option value="">Selecionar Rol</option>
                    @foreach ($roles as $rol)
                    <option value="{{$rol->id}}">{{$rol->nom_rol}}</option>
                    @endforeach

               </select>
            </div>
        </div>
        <a href="{{url('Usuario')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
