<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Especie;

class ConfiguracionEspecieController extends Controller
{
    public function index()
    {
        return view('admin.configuraciones.especies.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.configuraciones.especies.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',            
            'estado' => 'required',            
        ]);

        $especie = Especie::create($request->all());

        return redirect()->route('admin.configuraciones.especies.edit', $especie)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(especie $especie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Especie $especie)
    {
        return view('admin.configuraciones.especies.edit', compact('especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especie $especie)
    {
        $request->validate([
            'nombre' => 'required',
            'estado' => 'required',
        ]);

        $especie->update($request->all());

        return redirect()->route('admin.configuraciones.especies.edit', $especie)->with('info', 'El registro se editó correctamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(especie $especie)
    {
        $especie->delete();
        return redirect()->route('admin.configuraciones.especies.index')->with('info', 'El registro se eliminó correctamente');
    }
}
