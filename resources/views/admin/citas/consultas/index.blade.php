@extends('adminlte::page')

@section('title', 'Consulta Cita')

@section('content_header')
    <h1>Consultar cita</h1>
@stop

@section('content')
    @livewire('admin.citas.consulta-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
