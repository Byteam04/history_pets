@extends('adminlte::page')

@section('title', 'Historias')

@section('content_header')
    <h1>Crear historias</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a href="{{route('admin.historias_clinicas.historias.index')}}" class="btn btn-secondary"><i class="fas fa-caret-square-left"></i> Regresar al listado</a>
    </div>

    <div class="card-body">
        {!! Form::open(['route' => 'admin.historias_clinicas.historias.store', 'files' => true]) !!}
            <div class="mx-5 mb-3">
                @include('admin.historias_clinicas.historias.forms.form_fecha')
            </diV>
            @include('admin.historias_clinicas.historias.forms.form')   
            <hr/>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Guardar</button>

        {!! Form::close() !!}
    </div>

</div>


@stop
