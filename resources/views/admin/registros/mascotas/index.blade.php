@extends('adminlte::page')

@section('title', 'Mascotas')

@section('content_header')
    <h1>Mascotas</h1>
@stop

@section('content')

    @livewire('admin.registros.mascota-index')
	
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
	var i = 0;
	$('addotro').click(function(){
		++i;
		$('#more').append(
			`@livewire('admin.registros.mascota-index')`		
		)
	});
	</script>
@stop
