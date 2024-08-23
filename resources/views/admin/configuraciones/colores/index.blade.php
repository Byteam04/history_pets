@extends('adminlte::page')

@section('title', 'Colores')

@section('content_header')
    <h1>Colores</h1>
@stop

@section('content')
    @livewire('admin.configuraciones.color-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
