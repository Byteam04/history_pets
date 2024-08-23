@extends('adminlte::page')

@section('title', 'Tipo de documento')

@section('content_header')
    <h1>Editar tipo de documento</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a href="{{route('admin.configuraciones.tipo_identificaciones.index')}}" class="btn btn-secondary"><i class="fas fa-caret-square-left"></i> Regresar al listado</a>
    </div>

    <div class="card-body">
        {!! Form::model($tipo_identificacione, ['route' => ['admin.configuraciones.tipo_identificaciones.update', $tipo_identificacione], 'method' => 'put', 'files' => true]) !!}

            @include('admin.configuraciones.tipo_identificaciones.forms.form')

            <hr/>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Editar</button>

        {!! Form::close() !!}
    </div>

</div>


@stop
