<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Raza;
use App\Models\Admin\Especie;

class ConfiguracionRazaController extends Controller
{
     public function index()
    {
        return view('admin.configuraciones.razas.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $raza = Raza::all();        
        $especie = Especie::pluck('nombre','id');
        return view('admin.configuraciones.razas.create', compact('raza','especie'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',                        
            'estado' => 'required',
            'especie_id' => 'required',            
        ]);

        $raza = Raza::create($request->all());
        
        return redirect()->route('admin.configuraciones.razas.edit', $raza)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Raza $raza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Raza $raza)
    {
        $especie = Especie::pluck('nombre','id');
        return view('admin.configuraciones.razas.edit', compact('raza','especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raza $raza)
    {
        $request->validate([
            'nombre' => 'required',                        
            'estado' => 'required',
            'especie_id' => 'required',            
        ]);

        $raza->update($request->all());

        return redirect()->route('admin.configuraciones.razas.edit', $raza)->with('info', 'El registro se editó correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raza $raza)
    {
        $raza->delete();
        return redirect()->route('admin.configuraciones.razas.index')->with('info', 'El registro se eliminó correctamente');
    }
}
