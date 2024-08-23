@extends('adminlte::page')

@section('title', 'Razas')

@section('content_header')
    <h1>Crear raza</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a href="{{route('admin.configuraciones.razas.index')}}" class="btn btn-secondary"><i class="fas fa-caret-square-left"></i> Regresar al listado</a>
    </div>

    <div class="card-body">
        {!! Form::open(['route' => 'admin.configuraciones.razas.store']) !!}

            @include('admin.configuraciones.razas.forms.form')

            <hr/>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Guardar</button>

        {!! Form::close() !!}
    </div>

</div>


@stop
