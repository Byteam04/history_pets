@extends('adminlte::page')

@section('title', 'Tipo Identificacion')

@section('content_header')
    <h1>Tipo Identificación</h1>
@stop

@section('content')

	@livewire('admin.configuraciones.tipo-identificacion-index')

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
