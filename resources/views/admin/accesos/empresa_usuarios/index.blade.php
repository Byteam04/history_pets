@extends('adminlte::page')

@section('title', 'Empresa Usuarios')

@section('content_header')
    <h1>Empresa Usuarios</h1>
@stop

@section('content')
    @livewire('admin.accesos.empresa-usuario-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
