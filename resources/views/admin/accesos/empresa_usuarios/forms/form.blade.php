<div class="row g-2">
	<div class="col-md-10 col-sm-6 col-xl-10">
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
			{!! Form::label('Estado', null ) !!}
			{!! Form::select('estado', ['L' => 'Activo', 'S' => 'Inactivo'], null, ['class' => 'form-control']) !!}
			@error('estado')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div> 
</div>                       
