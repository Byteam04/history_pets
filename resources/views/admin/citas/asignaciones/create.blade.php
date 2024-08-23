@extends('adminlte::page')

@section('title', 'Asignacion')

@section('content_header')
    <h1>Crear asignación</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a href="{{route('admin.citas.asignaciones.index')}}" class="btn btn-secondary"><i class="fas fa-caret-square-left"></i> Regresar al listado</a>
    </div>

    <div class="card-body">
        {!! Form::open(['route' => 'admin.citas.asignaciones.store', 'files' => true]) !!}

            @include('admin.citas.asignaciones.forms.form_propietario')
            
            @include('admin.citas.asignaciones.forms.form_mascota')
            
            @include('admin.citas.asignaciones.forms.form_cita')

            <hr/>
            <button class="btn btn-success float-right" type="submit"><i class="fas fa-save"></i> Aceptar </button>

        {!! Form::close() !!}
    </div>

</div>


@stop
