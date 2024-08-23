<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitaAsignacionController extends Controller
{
    public function index()
    {
        return view('admin.citas.asignaciones.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.citas.asignaciones.create');
    }
}
