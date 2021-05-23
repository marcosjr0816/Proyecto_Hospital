<?php

namespace App\Http\Controllers;

use App\Pacientes;
use Illuminate\Http\Request;
use App;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function agregarpac()
    {
        //
        $pacientes =  App\Pacientes::all();
        return view('forms.agregarpacientes',['pacientes' => $pacientes]);
    }
    public function listaspac()
    {
        //
        $pacientes =  App\Pacientes::all();
        return view('list.listadodepacientes',['pacientes' => $pacientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pacientesAgregar = new Pacientes;
        $pacientesAgregar->identificacion = $request->input('identificacion');
        $pacientesAgregar->p_nombre = $request->input('p_nombre');
        $pacientesAgregar->s_nombre = $request->input('s_nombre');
        $pacientesAgregar->p_apellido = $request->input('p_apellido');
        $pacientesAgregar->s_apellido = $request->input('s_apellido');
        $pacientesAgregar->direccion = $request->input('direccion');
        $pacientesAgregar->telefono = $request->input('telefono');
        $pacientesAgregar->save();
        return redirect()->back()->with('exitoso', 'Se ha guardado correctamente, felicitaciones!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacientes $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pacientes $pacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacientes $pacientes)
    {
        //
    }
}
