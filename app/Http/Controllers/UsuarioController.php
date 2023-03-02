<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\rol;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\ValidationException;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuar = usuario::all();

        return view('Usuarios.index',['usuar' => $usuar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.createusu',['roles'=> rol::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'nom_comple' => 'required',
                'clave' => 'required',
                'password' => 'required',
                'rol_id' => 'required'
            ]);

            $usuario = new usuario();
            $usuario ->nom_comple = $request->input('nom_comple');
            $usuario ->clave = $request->input('clave');
            $usuario ->password = $request->input('password');
            $usuario ->rol_id = $request->input('rol_id');
            $usuario->save();

            return view("Usuarios.massage",['msg'=> "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
