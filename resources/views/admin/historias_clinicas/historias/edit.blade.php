@extends('adminlte::page')

@section('title', 'Historias')

@section('content_header')
    <h1>Editar historias</h1>
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
        {!! Form::model($historia, ['route' => ['admin.historias_clinicas.historias.update', $historia], 'method' => 'put', 'files' => true]) !!}

            @include('admin.historias_clinicas.historias.forms.form')
            @include('admin.historias_clinicas.historias.forms.form_fecha')
            @include('admin.historias_clinicas.historias.forms.form_propietario')
            @include('admin.historias_clinicas.historias.forms.form_mascota')
            @include('admin.historias_clinicas.historias.forms.form_anamnesis')
            @include('admin.historias_clinicas.historias.forms.form_examen_fisico')
            @include('admin.historias_clinicas.historias.forms.form_diagnosticos')

            <hr/>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Editar</button>

        {!! Form::close() !!}
    </div>

</div>


@stop
