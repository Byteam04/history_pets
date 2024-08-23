<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Empresa;
use App\Models\admin\TipoIdentificacion;
use App\Models\admin\Pais;
use App\Models\admin\Departamento;
use App\Models\admin\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfiguracionEmpresaController extends Controller
{
    public $prefijos = [
        0 => '',
        1 => 'Mvz',
        2 => 'Mv',
        3 => 'Z',
    ];
    
    /*public function __construct(){
        $this->middleware('can:admin.empresas.index')->only('index');
        $this->middleware('can:admin.empresas.create')->only('create', 'store');
        $this->middleware('can:admin.empresas.edit')->only('edit', 'update');
        $this->middleware('can:admin.empresas.destroy')->only('destroy');
    }*/
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('admin.configuraciones.empresas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresa = Empresa::all();        
        $tipo_identificacion = TipoIdentificacion::pluck('nombre','id');
        $pais = Pais::pluck('nombre','id');
        $departamento = Departamento::pluck('nombre','id');
        $municipio = Municipio::pluck('nombre','id');
        $prefijos = $this->prefijos;

        return view('admin.configuraciones.empresas.create', compact('tipo_identificacion', 'pais','departamento','municipio','prefijos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_empresa' => 'required',
            'nombre_representante' => 'required',
            'numero_documento' => 'required',
            
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'web' => 'required',
            'prefijo' => 'required',
            
            'tipo_identificacion_id' => 'required',
            'pais_id' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
        ]);

        $empresa = Empresa::create($request->all());

        /*if($request->file('file')){

            $url = Storage::put('public/empresas', $request->file('file'));

            $empresa->image()->create([
                'url' => $url
            ]);
        }*/

        return redirect()->route('admin.configuraciones.empresas.edit', $empresa)->with('info', 'El registro se creó correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        $prefijos = $this->prefijos;
        $tipo_identificacion = TipoIdentificacion::pluck('nombre','id');
        $pais = Pais::pluck('nombre','id');
        $departamento = Departamento::pluck('nombre','id');
        $municipio = Municipio::pluck('nombre','id');
        return view('admin.configuraciones.empresas.edit', compact('empresa','prefijos','tipo_identificacion','pais','departamento','municipio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'nombre_empresa' => 'required',
            'nombre_representante' => 'required',
            'numero_documento' => 'required',
            
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'web' => 'required',
            'prefijo' => 'required',
            
            'tipo_identificacion_id' => 'required',
            'pais_id' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
        ]);

        $empresa->update($request->all());

        /*if($request->file('file')){
            $url = Storage::put('public/empresas', $request->file('file'));

            if($empresa->image){
                Storage::delete($empresa->image->url);

                $empresa->image->update([
                    'url' => $url
                ]);
            }
            else{
                $empresa->image()->create([
                    'url' => $url
                ]);
            }
        }*/

        return redirect()->route('admin.configuraciones.empresas.edit', $empresa)->with('info', 'El registro se editó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->route('admin.configuraciones.empresas.index')->with('info', 'El registro se eliminó correctamente');
    }
}
