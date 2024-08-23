@extends('adminlte::page')

@section('title', 'Reportes')

@section('content_header')
    <h1>Editar reportes</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a href="{{route('admin.accesos.reportes.index')}}" class="btn btn-secondary"><i class="fas fa-caret-square-left"></i> Regresar al listado</a>
    </div>

    <div class="card-body">
        {!! Form::model($reporte, ['route' => ['admin.accesos.reportes.update', $reporte], 'method' => 'put', 'files' => true]) !!}

            @include('admin.accesos.reportes.forms.form')

            <hr/>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Editar</button>

        {!! Form::close() !!}
    </div>

</div>


@stop
