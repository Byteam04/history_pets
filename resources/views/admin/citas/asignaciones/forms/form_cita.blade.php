<div class="card">
    <div class="card-header">
        <div class="text-lg">{{__('Datos cita')}}</div>	
    </div>
    <div class="card-body ">
		<div class="row g-2">
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('Fecha', null ) !!}
					{{ Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control']) }}
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>	
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('Hora:', null ) !!}
					{!! Form::time('field_name', \Carbon\Carbon::now()->format('h:i:s'), ['class'=>'form-control']) !!}
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('Valor:', null ) !!}
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
					{!! Form::label('Tipo de consulta', null ) !!}
					{!! Form::select('Tipo_documento[]', ['L' => 'Primera vez', 'S' => 'Control'], null, ['class' => 'form-control'], ['placeholder' => 'Seleccione un tipo de identificacion']) !!}
					@error('name')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>	
		</div>
	</div>
</div>
