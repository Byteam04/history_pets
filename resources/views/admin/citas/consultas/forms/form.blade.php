<div class="row g-2">
	<div class="col-md-12 col-sm-4 col-xl-12">
		<div class="form-group">
			{!! Form::label('nombres:', null ) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Ingrese nombre de propietario']) !!}
			
			@error('name')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>     
</div>
<div class="row g-2">
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Tipo propietario', null ) !!}
			{!! Form::select('tipo_propietario', ['L' => 'Propietario', 'S' => 'Responsable'], null, ['class' => 'form-control']) !!}
			@error('name')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>	
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Tipo documento:', null ) !!}
			{!! Form::select('Tipo_documento[]', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control']) !!}
			@error('name')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Documento:', null ) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el número de documento']) !!}
			
			@error('name')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div> 
</div> 