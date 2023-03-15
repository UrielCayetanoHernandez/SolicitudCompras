@extends('Layout/template')


@section('title', 'Solicitud de Compras')


@section('contenido')

<main>
    <div class="container py-4">
        <h2>Editar Usuario</h2>

     @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

        <form action="{{url('Usuario/'.$usuarios->id)}}" method="post">
            @method("PUT")
        @csrf
        <div class="mb-3 row">
            <label for="nom_comple" class="col-sm-2 col-form-label">Nombre Completo</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nom_comple" id="nom_comple" value="{{$usuarios->nom_comple}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="clave" class="col-sm-2 col-form-label">Clave de Acceso</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="clave" id="clave" value="{{$usuarios->clave}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="password" id="password" value="{{$usuarios->password}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="rol_id" class="col-sm-2 col-form-label">Rol</label>
            <div class="col-sm-5">
               <select name="rol_id" id="rol_id" class="form-select" >
                    <option value="">Selecionar Rol</option>
                    @foreach ($roles as $rol)
                    <option value="{{$rol->id}}"@if ($rol->id==$usuarios->rol_id) {{'selected'}}
                    @endif> {{$rol->nom_rol}}</option>
                    @endforeach

               </select>
            </div>
        </div>
        <a href="{{url('Usuario')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
