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
        return view('Producto.createproduc',['categ1'=>categoria1::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
