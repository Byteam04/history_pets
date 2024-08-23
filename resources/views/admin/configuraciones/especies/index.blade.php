@extends('adminlte::page')

@section('title', 'Especies')

@section('content_header')
    <h1>Especie</h1>
@stop

@section('content')
    @livewire('admin.configuraciones.especie-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
