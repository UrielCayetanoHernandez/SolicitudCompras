<?php

namespace App\Http\Controllers;

use App\Models\categoria1;
use Illuminate\Http\Request;

class Categoria1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categori1 = categoria1::all();

        return view('Categoria1.index',['categori1'=>$categori1]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categoria1.createCat1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_cat1' => 'required'
        ]);

        $catego1 = new  categoria1 ();
        $catego1 -> nom_cat1 = $request->input('nom_cat1');
        $catego1 ->save();

        return view("Categoria1.massage",['msg'=> "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria1 $categoria1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categori1s = categoria1::find($id);
        return view('Categoria1.editarcat1',['categori1s'=>$categori1s]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nom_cat1' =>'required'
        ]);

        $categori1s = categoria1::find($id);
        $categori1s ->nom_cat1 =$request->input('nom_cat1');
        $categori1s->save();

        return view("Categoria1.massage",['msg'=> "Registro Guardado"]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categori1s= categoria1::find($id);
        $categori1s->delete();

        return redirect('Categoria1');
    }
}
