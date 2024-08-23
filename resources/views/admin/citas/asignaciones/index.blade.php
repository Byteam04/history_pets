@extends('adminlte::page')

@section('title', 'Asignacion')

@section('content_header')
	<div class="ml-2">
		<h1>Asignar asignación</h1>
	</div>		
@stop

@section('content')    
   @livewire('admin.citas.asignacion-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
