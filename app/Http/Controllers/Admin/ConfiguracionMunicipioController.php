<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Departamento;
use App\Models\Admin\Municipio;

class ConfiguracionMunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.configuraciones.municipios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipio = Municipio::all();        
        $departamento = Departamento::pluck('nombre','id');
        return view('admin.configuraciones.municipios.create', compact('municipio','departamento'));
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',                        
            'estado' => 'required',
            'departamento_id' => 'required',            
        ]);

        $municipio = Municipio::create($request->all());
        
        return redirect()->route('admin.configuraciones.municipios.edit', $municipio)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $municipio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipio $municipio)
    {
        $departamento = Departamento::pluck('nombre','id');
        return view('admin.configuraciones.municipios.edit', compact('municipio','departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipio $municipio)
    {
        $request->validate([
            'nombre' => 'required',
            'departamento_id' => 'required',
            'estado' => 'required',
        ]);

        $municipio->update($request->all());

        return redirect()->route('admin.configuraciones.municipios.edit', $municipio)->with('info', 'El registro se editó correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {
        $municipio->delete();
        return redirect()->route('admin.configuraciones.municipios.index')->with('info', 'El registro se eliminó correctamente');
    }
}
