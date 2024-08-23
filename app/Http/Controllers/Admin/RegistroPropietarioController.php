<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistroPropietarioController extends Controller
{
    public function index()
    {
        return view('admin.registros.propietarios.index');
    }
	
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.registros.propietarios.create');
    }
}
