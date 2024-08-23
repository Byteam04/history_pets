<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Color;
use App\Models\Admin\Especie;

class ConfiguracionColorController extends Controller
{
    public function index()
    {
        return view('admin.configuraciones.colores.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $color = Color::all();        
        $especie = Especie::pluck('nombre','id');
        return view('admin.configuraciones.colores.create', compact('color','especie'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',                        
            'estado' => 'required',
            'especie_id' => 'required',            
        ]);

        $color = Color::create($request->all());
        
        return redirect()->route('admin.configuraciones.colores.edit', $color)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(color $color)
    {
        $especie = Especie::pluck('nombre','id');
        return view('admin.configuraciones.colores.edit', compact('color', 'especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, color $color)
    {
        $request->validate([
            'nombre' => 'required',
            'especie_id' => 'required',
            'estado' => 'required',
        ]);

        $color->update($request->all());

        return redirect()->route('admin.configuraciones.colores.edit', $color)->with('info', 'El registro se editó correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(color $color)
    {
        $color->delete();
        return redirect()->route('admin.configuraciones.colores.index')->with('info', 'El registro se eliminó correctamente');
    }
}
