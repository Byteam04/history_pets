<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Pais;

class ConfiguracionPaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.configuraciones.paises.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pai = Pais::all();        
        return view('admin.configuraciones.paises.create', compact('pai'));
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',                        
            'estado' => 'required',           
        ]);

        $pai = Pais::create($request->all());
        
        return redirect()->route('admin.configuraciones.paises.edit', $pai)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pais $pai)
    {
        return view('admin.configuraciones.paises.edit', compact('pai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pais $pai)
    {
        $request->validate([
            'nombre' => 'required',
            'estado' => 'required',
        ]);

        $pai->update($request->all());

        return redirect()->route('admin.configuraciones.paises.edit', $pai)->with('info', 'El registro se editó correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pais $pai)
    {
        $pai->delete();
        return redirect()->route('admin.configuraciones.paises.index')->with('info', 'El registro se eliminó correctamente');
    }
}
