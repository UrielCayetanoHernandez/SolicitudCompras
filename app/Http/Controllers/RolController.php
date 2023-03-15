<?php

namespace App\Http\Controllers;

use App\Models\rol;
use App\Models\usuario;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = rol::all();

        return view('Roles.index',['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Roles.createrol');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_rol' => 'required',
            'descri_rol' => 'required'
        ]);

        $Roll = new rol();
        $Roll ->nom_rol = $request->input('nom_rol');
        $Roll ->descri_rol = $request->input('descri_rol');
        $Roll->save();

        return view("Roles.massage",['msg'=> "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roles=rol::find($id);
        return view('Roles.editarrol',['roles'=> $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nom_rol' => 'required',
            'descri_rol' => 'required'
        ]);

        $roles = rol::find($id);
        $roles ->nom_rol = $request->input('nom_rol');
        $roles ->descri_rol = $request->input('descri_rol');
        $roles->save();

        return view("Roles.massage",['msg'=> "Registro Modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roles=rol::find($id);
        $roles->delete();

        return redirect('Rol');
    }
}
