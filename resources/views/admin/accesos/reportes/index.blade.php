@extends('adminlte::page')

@section('title', 'Reportes')

@section('content_header')
    <h1>Reportes</h1>
@stop

@section('content')
    @livewire('admin.accesos.reporte-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
