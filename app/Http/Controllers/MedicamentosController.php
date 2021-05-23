<?php

namespace App\Http\Controllers;

use App\Medicamentos;
use Illuminate\Http\Request;
use App;

class MedicamentosController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function agregarmedic()
    {
        //
        $medicamentos =  App\Medicamentos::all();
        return view('forms.agregarmedicamento',['medicamentos' => $medicamentos]);
    }
    public function listasmedic()
    {
        //
        $medicamentos =  App\Medicamentos::all();
        return view('list.listadodemedicamentos',['medicamentos' => $medicamentos]);
    }

    public function store(Request $request)
    {
        //
        $medicamentosAgregar = new Medicamentos;
        $medicamentosAgregar->nombre = $request->input('nombre');
        $medicamentosAgregar->descripcion = $request->input('descripcion');
        $medicamentosAgregar->save();
        return redirect()->back()->with('exitoso', 'Se ha guardado correctamente, felicitaciones!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamentos $medicamentos)
    {
        //
    }
}
