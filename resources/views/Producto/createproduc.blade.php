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
        <div class="mb-3 row">
            <label for="Unidad" class="col-sm-2 col-form-label">Unidad </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Unidad" id="Unidad" value="{{old ('Unidad')}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="precioUni" class="col-sm-2 col-form-label">Precio </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="precioUni" id="precioUni" value="{{old ('precioUni')}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tipoimpu" class="col-sm-2 col-form-label">Tipo de impuesto </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tipoimpu" id="tipoimpu" value="{{old ('tipoimpu')}}" >
            </div>
        </div>

        <div class="mb-3 row">
            <label for="impuesto" class="col-sm-2 col-form-label">Impuesto </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="impuesto" id="impuesto" value="{{old ('impuesto')}}" >
            </div>
        </div>

        <div class="mb-3 row">
            <label for="entregar" class="col-sm-2 col-form-label">Entrega </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="entregar" id="entregar" value="{{old ('entregar')}}" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cate_id1" class="col-sm-2 col-form-label">Categoria 1 </label>
            <div class="col-sm-5">
               <select name="cate_id1" id="cate_id1" class="form-select" >
                    <option value="">Selecionar Categoria 1</option>
                    @foreach ($categ1 as $cate1)
                    <option value="{{$cate1->id}}">{{$cate1->nom_cat1}}</option>
                    @endforeach

               </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cate_id2" class="col-sm-2 col-form-label">Categoria 1 </label>
            <div class="col-sm-5">
               <select name="cate_id2" id="cate_id2" class="form-select" >
                    <option value="">Selecionar Categoria 2</option>
                    @foreach ($categ2 as $cate2)
                    <option value="{{$cate2->id}}">{{$cate2->nom_cat2}}</option>
                    @endforeach

               </select>
            </div>
        </div>



        <a href="{{url('Categoria2')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
