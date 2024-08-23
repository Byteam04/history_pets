<div class="row g-2">
	<div class="col-md-8 col-sm-6 col-xl-8">
		<div class="mb-2">
		
			{!! Form::label('Nombre', null ) !!}
			{!! Form::text('nombre', null, ['class' => 'form-control','id'=>'name', 'placeholder'=>'Ingrese tipo de identificación']) !!}
			
			@error('nombre')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div> 
	<div class="col-md-2 col-sm-6 col-xl-2">
		<div class="form-group">
			{!! Form::label('Especie', null ) !!}
			{!! Form::select('especie_id', $especie, null, ['class' => 'form-control', 'placeholder'=>'Seleccione una especie']) !!}
			@error('especie_id')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>
	<div class="col-md-2 col-sm-6 col-xl-2">
		<div class="form-group">
			{!! Form::label('Estado', null ) !!}
			{!! Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], null, ['class' => 'form-control', 'placeholder'=>'Seleccione un estado']) !!}
			@error('estado')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div> 	
</div>                       
