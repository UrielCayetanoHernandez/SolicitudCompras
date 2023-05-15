<?php

namespace App\Http\Controllers;

use App\Models\categoria2;
use Illuminate\Http\Request;

class Categoria2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categori2 = categoria2::all();

        return view('Categoria2.index',['categori2' => $categori2]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categoria2.createCat2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_cat2' => 'required'
        ]);

        $categori2 = new categoria2();
        $categori2 ->nom_cat2= $request->input('nom_cat2');
        $categori2->save();

        return view("Categoria2.massage",['msg'=> "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria2 $categoria2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categori2 = categoria2::find($id);
        return view('Categoria2.editarcat2',['categori2'=>$categori2]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_cat2' => 'required'
        ]);

        $categori2 = categoria2::find($id);
        $categori2 -> nom_cat2 = $request->input('nom_cat2');
        $categori2->save();

        return view("Categoria2.massage",['msg'=> "Registro Modificado Correctamente"]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categori2 = categoria2::find($id);
        $categori2->delete();

        return redirect('Categoria2');
    }
}
