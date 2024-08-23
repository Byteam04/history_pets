<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    public function index()
    {
        return view('admin.historias_clinicas.historias.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.historias_clinicas.historias.create');
    }
}
