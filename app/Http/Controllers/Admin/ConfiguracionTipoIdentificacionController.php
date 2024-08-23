<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TipoIdentificacion;

class ConfiguracionTipoIdentificacionController extends Controller
{
     public function index()
    {
        return view('admin.configuraciones.tipo_identificaciones.index');
    }
	
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.configuraciones.tipo_identificaciones.create');
    }
	
	public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',                        
            'estado' => 'required',           
        ]);

        $tipo_identificacione = TipoIdentificacion::create($request->all());
        
        return redirect()->route('admin.configuraciones.tipo_identificaciones.edit', $tipo_identificacione)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TipoIdentificacion $tipo_identificacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoIdentificacion $tipo_identificacione)
    {
        return view('admin.configuraciones.tipo_identificaciones.edit', compact('tipo_identificacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoIdentificacion $tipo_identificacione)
    {
        $request->validate([
            'nombre' => 'required',
            'estado' => 'required',
        ]);

        $tipo_identificacione->update($request->all());

        return redirect()->route('admin.configuraciones.tipo_identificaciones.edit', $tipo_identificacione)->with('info', 'El registro se editó correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoIdentificacion $tipo_identificacione)
    {
        $tipo_identificacione->delete();
        return redirect()->route('admin.configuraciones.tipo_identificaciones.index')->with('info', 'El registro se eliminó correctamente');
    }
}
