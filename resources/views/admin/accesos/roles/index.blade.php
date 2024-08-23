@extends('adminlte::page')

@section('title', 'Rol')

@section('content_header')
	<div class="ml-2">
		<h1>Asignar rol</h1>
	</div>		
@stop

@section('content')    
   @livewire('admin.accesos.rol-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop