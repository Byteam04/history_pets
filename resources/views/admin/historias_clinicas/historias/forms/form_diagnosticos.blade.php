<div class="card">
    <div class="card-header">
        <div class="text-lg">{{__('Abordaje diagnóstico')}}</div>	
    </div>
    <div class="card-body ">
		<div class="row g-2"> 
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Lista de problemas', null ) !!}
					{!! Form::textarea('lista_problemas', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
					@error('lista_problemas')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div> 
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Lista maestra', null ) !!}
					{!! Form::textarea('lista_maestra', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
					@error('lista_maestra')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div> 
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Diagnósticos diferenciales', null ) !!}
					{!! Form::textarea('diagnosticos_diferenciales', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
					@error('diagnosticos_diferenciales')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>
		</div>  
    </div>
	<div class="card-header">
        <div class="text-lg">{{__('Exámenes complementarios y resultados')}}</div>	
    </div>
    <div class="card-body "> 
		<div class="row g-2"> 
			<div class="col-md-4 col-sm-4 col-xl-4">
				<div class="form-group">
					{!! Form::label('Fecha', null ) !!}
					{{ Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control']) }}
					@error('fecha')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>	 
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Examen', null ) !!}
					{!! Form::text('examen', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
					@error('examen')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div> 
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Resultados', null ) !!}
					{!! Form::text('resultados', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}                      
				
					@error('resultados')
						<small class="text-danger">{{ $message }}</small>
					@enderror
				</div>
			</div>
		</div> 
    </div>
	<div class="card-header">
        <div class="text-lg">{{__('Diagnósticos')}}</div>	
    </div>
    <div class="card-body "> 
		<div class="row g-2"> 
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Diagnósticos presuntivos justificado', null ) !!}
					{!! Form::textarea('diagnosticos_presuntivos', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
					@error('diagnosticos_diferenciales')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Diagnósticos definitivo', null ) !!}
					{!! Form::textarea('diagnosticos_definitivo', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
					@error('diagnosticos_definitivo')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Plan terapéutico', null ) !!}
					{!! Form::textarea('plan_terapeutico', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
					@error('plan_terapeutico')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Pronostico', null ) !!}
					{!! Form::textarea('pronostico', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
					@error('pronostico')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>									
		</div>  
    </div>
	<div class="card-header">
        <div class="text-lg">{{__('Evaluación')}}</div>	
    </div>
    <div class="card-body ">
		<div class="row g-2"> 
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="form-group">
					{!! Form::label('Fecha', null ) !!}
					{{ Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control']) }}
					@error('fecha')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>	
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="form-group">
					{!! Form::label('Hora:', null ) !!}
					{!! Form::time('hora', \Carbon\Carbon::now()->format('h:i:s'), ['class'=>'form-control']) !!}
					@error('hora')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xl-12">
				<div class="form-group">
					{!! Form::label('Observaciones', null ) !!}
					{!! Form::textarea('observaciones', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
					
					@error('observaciones')
						<small class="text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xl-4">
				<div class="mb-2">
					{!! Form::label('Anexos', null ) !!}
					{!! Form::file('file', null, ['class' => 'form-control']) !!}                      
				
					@error('anexos')
						<small class="text-danger">{{ $message }}</small>
					@enderror
				</div>
			</div>			
		</div>
	</div>
</div>



				