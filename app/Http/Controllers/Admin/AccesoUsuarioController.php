<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccesoUsuarioController extends Controller
{
    public function files(User $user){
		return view('Admin.accesos.usuarios.files', compact('user'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $path_one = "";
		
		$request->validate([
            'file_one' => 'file|max:5000|mimes:pdf',
        ]);
		
		if($request->file('file_one')){
			$path_one = Storage::putFileAs(
				'files', $request->file('file_one'), $request->file('file_one')->getClientOriginalName()
			);
		}
		else{
			if($request->file_one_hide){
				$path_one = $request->file_one_hide;
			}
		}

        $user::where('id',$user->id)->update([
            'file_one' => $path_one,
        ]);
		
		return view('Admin.accesos.usuarios.files', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
