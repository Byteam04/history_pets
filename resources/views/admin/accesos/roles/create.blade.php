@extends('adminlte::page')

@section('title', 'Rol')

@section('content_header')
    <h1>Crear rol</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a href="{{route('admin.accesos.roles.index')}}" class="btn btn-secondary"><i class="fas fa-caret-square-left"></i> Regresar al listado</a>
    </div>

    <div class="card-body">
		{!! Form::open(['route' => 'admin.accesos.roles.store', 'files' => true]) !!}

			@include('Admin.accesos.roles.forms.form')

				
            <hr/>
            <button class="btn btn-success float-right" type="submit"><i class="fas fa-save"></i> Aceptar </button>	

		{!! Form::close() !!}
        
    </div>

</div>


@stop
