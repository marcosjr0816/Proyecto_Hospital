<?php

namespace App\Http\Controllers;

use App\Doctores;
use Illuminate\Http\Request;
use App;

class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
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
    public function agregardoc()
    {
        //
        $doctores =  App\Doctores::all();
        return view('forms.agregardoctores',['doctores' => $doctores]);
    }
    public function listasdoc()
    {
        //
        $doctores =  App\Doctores::all();
        return view('list.listadodedoctores',['doctores' => $doctores]);
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
        $doctoresAgregar = new Doctores;
        $doctoresAgregar->identificacion = $request->input('identificacion');
        $doctoresAgregar->p_nombre = $request->input('p_nombre');
        $doctoresAgregar->s_nombre = $request->input('s_nombre');
        $doctoresAgregar->p_apellido = $request->input('p_apellido');
        $doctoresAgregar->s_apellido = $request->input('s_apellido');
        $doctoresAgregar->save();
        return redirect()->back()->with('exitoso', 'Se ha guardado correctamente, felicitaciones!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function show(Doctores $doctores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctores $doctores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctores $doctores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctores $doctores)
    {
        //
    }
}
