@extends('adminlte::page')

@section('title', 'Propietarios')

@section('content_header')
    <h1>Editar propietario</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a href="{{route('admin.registros.propietarios.index')}}" class="btn btn-secondary"><i class="fas fa-caret-square-left"></i> Regresar al listado</a>
    </div>

    <div class="card-body">
        {!! Form::model($propietario, ['route' => ['admin.registros.propietarios.update', $propietario], 'method' => 'put', 'files' => true]) !!}

            @include('admin.registros.propietarios.forms.form')

            <hr/>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Editar</button>

        {!! Form::close() !!}
    </div>

</div>


@stop
