<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Pais;
use App\Models\Admin\Departamento;

class ConfiguracionDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.configuraciones.departamentos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamento = Departamento::all();        
        $pais = Pais::pluck('nombre','id');
        return view('admin.configuraciones.departamentos.create', compact('pais','departamento'));
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',                        
            'estado' => 'required',
            'pais_id' => 'required',            
        ]);

        $departamento = Departamento::create($request->all());
        
        return redirect()->route('admin.configuraciones.departamentos.edit', $departamento)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        $pais = Pais::pluck('nombre','id');
        return view('admin.configuraciones.departamentos.edit', compact('departamento','pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
            'nombre' => 'required',
            'pais_id' => 'required',
            'estado' => 'required',
        ]);

        $departamento->update($request->all());

        return redirect()->route('admin.configuraciones.departamentos.edit', $departamento)->with('info', 'El registro se editó correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('admin.configuraciones.departamentos.index')->with('info', 'El registro se eliminó correctamente');
    }
}
