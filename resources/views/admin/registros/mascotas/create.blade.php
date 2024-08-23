@extends('adminlte::page')

@section('title', 'Mascotas')

@section('content_header')
    <h1>Crear mascota</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a href="{{route('admin.registros.mascotas.index')}}" class="btn btn-secondary"><i class="fas fa-caret-square-left"></i> Regresar al listado</a>
    </div>

    <div class="card-body">
        {!! Form::open(['route' => 'admin.registros.mascotas.store', 'files' => true]) !!}
            
            @include('admin.registros.mascotas.forms.form')

            <hr/>
            <button class="btn btn-primary" type="submit"><i class="fa fa-plus-circle"></i> Otro </button>
            <button class="btn btn-success float-right" type="submit"><i class="fas fa-save"></i> Aceptar </button>

        {!! Form::close() !!}
    </div>

</div>


@stop
