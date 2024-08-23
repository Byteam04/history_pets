<div class="card">
    <div class="card-body ">   
        <div class="row g-2"> 
            <div class="col-md-4 col-sm-12 col-xl-4">
				<div class="form-group text-uppercase text-lg">
					{!! Form::label('Datos mascota:', null ) !!}		
				</div>
			</div>
            <div class="col-md-8 col-sm-12 col-xl-8">
                <div class="mb-2">
                    {!! Form::label('Nombre:', null ) !!}
                    
                </div>
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Raza:', null ) !!}
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Especie:', null ) !!}
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Color:', null ) !!}
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Pelaje:', null ) !!}
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Edad:', null ) !!}
                    
                </div>
            </div>   
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Peso:', null ) !!}
                    
                </div>
            </div>                  
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="form-group">
                    {!! Form::label('Chip:', null ) !!}
                   
                </div> 
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Número Chip:', null ) !!}
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="form-group">
                    {!! Form::label('Sexo:', null ) !!}
                    
                </div>
            </div> 
            <div class="col-md-12 col-sm-12 col-xl-12">
                <div class="form-group">
                    {!! Form::label('Origen/Procedencia:', null ) !!}
                    {!! Form::textarea('origen_procedencia', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('origen_procedencia')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
        </div>
    </div>
</div>
