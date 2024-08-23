@extends('adminlte::page')

@section('title', 'Pelajes')

@section('content_header')
    <h1>Pelaje</h1>
@stop

@section('content')
    @livewire('admin.configuraciones.pelaje-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
