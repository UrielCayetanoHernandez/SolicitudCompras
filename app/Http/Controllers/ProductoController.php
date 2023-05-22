<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\categoria1;
use App\Models\categoria2;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\ValidationException;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produc = producto::all();

        return view('Producto.index',['produc'=>$produc]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Producto.createproduc',
                    ['categ1'=>categoria1::all()],
                    ['categ2'=>categoria2::all()])

        ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'producto' => 'required'
             ]);

            $product = new producto();
            $product ->clave = $request->input('clave');
            $product->producto= $request->input('producto');
            $product->Unidad= $request->input('Unidad');
            $product->precioUni= $request->input('precioUni');
            $product->tipoimpu= $request->input('tipoimpu');
            $product->impuesto= $request->input('impuesto');
            $product->entregar= $request->input('entregar');
            $product->cate_id1= $request->input('cate_id1');
            $product->cate_id2= $request->input('cate_id2');
            $product->save();

            return view("Producto.massage",['msg'=> "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto)
    {
        //
    }
}
