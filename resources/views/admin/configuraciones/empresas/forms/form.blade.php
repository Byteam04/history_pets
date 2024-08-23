<div class="row g-2">
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Nombre empresa:', null ) !!}
			{!! Form::text('nombre_empresa', null, ['class' => 'form-control', 'placeholder'=>'Ingrese nombre de propietario']) !!}
			
			@error('nombre_empresa')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>	
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Nombre representante:', null ) !!}
			{!! Form::text('nombre_representante', null, ['class' => 'form-control', 'placeholder'=>'Ingrese nombre de propietario']) !!}
			
			@error('nombre_representante')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Prefijo:', null ) !!}
			{!! Form::select('prefijo', $prefijos, null, ['class' => 'form-control', 'placeholder'=>'Seleecione un prefijo']) !!}
			@error('prefijo')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>	 	
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Tipo documento:', null ) !!}
			{!! Form::select('tipo_identificacion_id', $tipo_identificacion, null, ['class' => 'form-control', 'placeholder'=>'Seleecione un tipo de documento']) !!}
			@error('tipo_identificacion_id')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>
	
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Documento:', null ) !!}
			{!! Form::text('numero_documento', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el número de documento']) !!}
			
			@error('numero_documento')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div> 
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Dirección:', null ) !!}
			{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder'=>'Ingrese la dirección']) !!}
			
			@error('direccion')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>   
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Teléfono:', null ) !!}
			{!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el teléfono']) !!}
			
			@error('telefono')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>   
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Correo electrónico:', null ) !!}
			{!! Form::text('correo', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el el correo electrónico']) !!}
			
			@error('correo')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Web:', null ) !!}
			{!! Form::text('web', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el el correo electrónico']) !!}
			
			@error('web')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div> 		
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('País:', null) !!}
			{!! Form::select('pais_id', $pais, null, ['class' => 'form-control', 'placeholder'=>'Seleecione un país']) !!}
			
			@error('name')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>   
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Departamento', null) !!}
			{!! Form::select('departamento_id', $departamento, null, ['class' => 'form-control', 'placeholder'=>'Seleecione un departamento']) !!}
			
			@error('name')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>  
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Municipio', null) !!}
			{!! Form::select('municipio_id', $municipio, null, ['class' => 'form-control', 'placeholder'=>'Seleecione un municipio']) !!}
			
			@error('name')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>               
</div>