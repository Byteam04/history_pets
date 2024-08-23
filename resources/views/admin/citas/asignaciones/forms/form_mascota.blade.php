<div class="card">
    <div class="card-header">
        <div class="text-lg">{{__('Datos mascota')}}</div>	
    </div>
    <div class="card-body "> 
        <div class="row g-2">
            <div class="col-md-12 col-sm-12 col-xl-12">
                <div class="mb-2">
                    {!! Form::label('Nombre', null ) !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control','id'=>'name', 'placeholder'=>'Ingrese nombre de propietario']) !!}
                    
                    @error('nombre')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>                 
        </div>  
        <div class="row g-2"> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Raza', null ) !!}
                    {!! Form::select('Tipo_documento[]', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control'], ['placeholder' => 'Seleccione un tipo de identificacion']) !!}
                    @error('Tipo_documento')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Especie', null ) !!}
                    {!! Form::select('Tipo_documento[]', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control'], ['placeholder' => 'Seleccione un tipo de identificacion']) !!}
                    @error('Tipo_documento')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Color', null ) !!}
                    {!! Form::select('Tipo_documento[]', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control'], ['placeholder' => 'Seleccione un tipo de identificacion']) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Pelaje', null ) !!}
                    {!! Form::select('Tipo_documento[]', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control'], ['placeholder' => 'Seleccione un tipo de identificacion']) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Edad', null ) !!}
                    {!! Form::text('edad', null, ['class' => 'form-control','id'=>'edad', 'placeholder'=>'Ingrese la edad']) !!}
                    
                    @error('edad')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>   
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Peso', null ) !!}
                    {!! Form::text('peso', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
                    
                    @error('peso')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>     
        </div>
        <div class="row g-2">              
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="form-group">
                    {!! Form::label('chip', null ) !!}
                    {!! Form::select('chip', ['L' => 'Si', 'S' => 'No'], null, ['class' => 'form-control']) !!}
                    @error('chip')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div> 
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Número Chip', null ) !!}
                    {!! Form::text('num_chip', null, ['class' => 'form-control','id'=>'num_chip', 'placeholder'=>'Ingrese Número Chip']) !!}
                    
                    @error('num_chip')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="form-group">
                    {!! Form::label('Sexo', null ) !!}
                    {!! Form::select('tipo_sexo', ['L' => 'Masculino', 'S' => 'Femenino'], null, ['class' => 'form-control']) !!}
                    @error('tipo_sexo')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
        </div>  
    </div>
</div>
