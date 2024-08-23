<div class="card">
    <div class="card-header">
        <div class="text-lg">{{__('Anamnesis')}}</div>	
    </div>
    <div class="card-body ">       
        <div class="row g-2">
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Esterilizado', null ) !!}
                    {!! Form::select('Tipo_esterilizado[]', ['L' => 'Si', 'S' => 'No'], null, ['class' => 'form-control'], ['placeholder' => 'Seleccione un tipo de identificacion']) !!}
                    @error('Tipo_esterilizado')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('N° Partos', null ) !!}
                    {!! Form::text('n_partos', null, ['class' => 'form-control','id'=>'edad', 'placeholder'=>'Ingrese número e partos']) !!}
                    
                    @error('n_partos')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
             <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Vive con otros animales', null ) !!}
                    {!! Form::select('animales', ['L' => 'Si', 'S' => 'No'], null, ['class' => 'form-control'], ['placeholder' => 'Seleccione un tipo de identificacion']) !!}
                    @error('Tipo_esterilizado')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="form-group">
                    {!! Form::label('¿Cuales?', null ) !!}
                    {!! Form::textarea('cuales', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('cuales')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="form-group">
                    {!! Form::label('Dieta', null ) !!}
                    {!! Form::textarea('dieta', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('dieta')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>  
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="form-group">
                    {!! Form::label('Enfermedades previas', null ) !!}
                    {!! Form::textarea('enfermedades', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('tipo_sexo')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Cirugias previas', null ) !!}
                    {!! Form::textarea('cirugias_previas', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    
                    @error('cirugias_previas')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Ultima desparacitación', null ) !!}
                    {!! Form::textarea('desparacitacion', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    
                    @error('desparacitacion')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Tratamientos recientes', null ) !!}
                    {!! Form::textarea('tratamientos_recientes', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    
                    @error('tratamientos_recientes')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>  
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Esquema vacunal', null ) !!}
                    {!! Form::textarea('esquema_vacunal', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    
                    @error('esquema_vacunal')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>  
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Viajes recientes', null ) !!}
                    {!! Form::textarea('viajes_recientes', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    
                    @error('viajes_recientes')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Motivos de consulta', null ) !!}
                    {!! Form::textarea('motivos_consulta', null, ['class'  => 'form-control', 'rows' => 2, 'placeholder' => 'escribir la informacion como la menciona el propietario']) !!}
                    
                    @error('motivos_consulta')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>  
        </div>  
    </div>
</div>
