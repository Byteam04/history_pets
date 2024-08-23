<div class="card">
    <div class="card-header">
        <div class="text-lg">{{__('Datos Propietario')}}</div>	
    </div>
    <div class="card-body "> 
		<div class="row g-2">
			<div class="col-md-12 col-sm-4 col-xl-12">
				<div class="form-group">
					{!! Form::label('nombre:', null ) !!}
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
			
			
		<div class="row g-2">
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('Dirección:', null ) !!}
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Ingrese la dirección']) !!}
					
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>   
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('Teléfono:', null ) !!}
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el teléfono']) !!}
					
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>   
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('Correo electrónico:', null ) !!}
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el el correo electrónico']) !!}
					
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>  
		</div>  

		<div class="row g-2">	
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('País:', null) !!}
					{!! Form::select('Tipo_documento', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control']) !!}
					
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>   
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('departamento', 'Departamento') !!}
					{!! Form::select('Tipo_documento', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control']) !!}
					
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>  
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('ciudad', 'Ciudad') !!}
					{!! Form::select('Tipo_documento', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control']) !!}
					
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>               
		</div>
	</div>
</div>

