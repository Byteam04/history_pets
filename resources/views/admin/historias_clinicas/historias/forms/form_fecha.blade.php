<div class="row g-2"  hidden>
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group ">
			{!! Form::label('Fecha *', null ) !!}
			{{ Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control']) }}
			@error('fecha')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>	
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Hora:', null ) !!}
			{!! Form::time('hora', \Carbon\Carbon::now()->format('h:i:s'), ['class'=>'form-control']) !!}
			@error('hora')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group">
			{!! Form::label('Referencia:', null ) !!}
			</br>
			{!! Form::label('######', null ) !!}
			
			@error('referencia')
				<small class="text-danger">{{$message}}</small>
			@enderror
		</div>
	</div> 
</div> 

<div class="row g-2">
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group ">
			{!! Form::label('Fecha:', null ) !!}
			{{  \Carbon\Carbon::now()->format('Y-m-d') }}			
		</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group ">
			{!! Form::label('Hora:', null ) !!}
			{{  \Carbon\Carbon::now()->format('h:i:s') }}			
		</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xl-4">
		<div class="form-group ">
			{!! Form::label('Referencia:', null ) !!}
			{!! Form::label('######', null ) !!}		
		</div>
	</div>	
</div>


