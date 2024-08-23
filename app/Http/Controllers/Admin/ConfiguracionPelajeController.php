<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Pelaje;
use App\Models\Admin\Especie;

class ConfiguracionPelajeController extends Controller
{
     public function index()
    {
        return view('admin.configuraciones.pelajes.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelaje = Pelaje::all();        
        $especie = Especie::pluck('nombre','id');
        return view('admin.configuraciones.pelajes.create', compact('pelaje','especie'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',                        
            'estado' => 'required',
            'especie_id' => 'required',            
        ]);

        $pelaje = Pelaje::create($request->all());
        
        return redirect()->route('admin.configuraciones.pelajes.edit', $pelaje)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pelaje $pelaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelaje $pelaje)
    {
        $especie = Especie::pluck('nombre','id');
        return view('admin.configuraciones.pelajes.edit', compact('pelaje', 'especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelaje $pelaje)
    {
        $request->validate([
            'nombre' => 'required',
            'especie_id' => 'required',
            'estado' => 'required',
        ]);

        $pelaje->update($request->all());

        return redirect()->route('admin.configuraciones.pelajes.edit', $pelaje)->with('info', 'El registro se editó correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelaje $pelaje)
    {
        $pelaje->delete();
        return redirect()->route('admin.configuraciones.pelajes.index')->with('info', 'El registro se eliminó correctamente');
    }
}
