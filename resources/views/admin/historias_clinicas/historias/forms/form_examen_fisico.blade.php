<div class="card">
    <div class="card-header">
        <div class="text-lg">{{__('Examen físico general')}}</div>	
    </div>
    <div class="card-body ">       
        <div class="row g-2"> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Condición corporal', null ) !!}
                    {!! Form::select('condicion_corporal', ['L' => '1', 'S' => '2', 'S' => '3'], null, ['class' => 'form-control'], ['placeholder' => 'Seleccione un tipo de identificacion']) !!}
                    @error('condicion_corporal')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('T°C', null ) !!}
                    {!! Form::text('TC', null, ['class' => 'form-control','id'=>'edad', 'placeholder'=>'Ingrese la edad']) !!}
                    
                    @error('TC')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>   
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('FR(R/min)', null ) !!}
                    {!! Form::text('FR', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
                    
                    @error('FR')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('FC(L/min)', null ) !!}
                    {!! Form::text('FC', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
                    
                    @error('FC')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('TRPC(seg)', null ) !!}
                    {!! Form::text('TRPC', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
                    
                    @error('TRPC')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('TLLC(seg)', null ) !!}
                    {!! Form::text('TLLC', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
                    
                    @error('TLLC')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Mucosas', null ) !!}
                    {!! Form::text('mucosas', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
                    
                    @error('mucosas')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Pulso', null ) !!}
                    {!! Form::text('pulso', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
                    
                    @error('pulso')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Porcentaje deshidratación', null ) !!}
                    {!! Form::text('porcentaje_deshidratacion', null, ['class' => 'form-control','id'=>'peso', 'placeholder'=>'Ingrese el peso']) !!}
                    
                    @error('porcentaje_deshidratacion')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('organos de los sentidos', null ) !!}
                    {!! Form::textarea('organos_sentidos', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('organos_sentidos')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Piel y pelaje', null ) !!}
                    {!! Form::textarea('piel_pelaje', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('piel_pelaje')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div> 
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Ganglios linfaticos', null ) !!}
                    {!! Form::textarea('ganglios_linfaticos', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('ganglios_linfaticos')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Sistema digestivo', null ) !!}
                    {!! Form::textarea('sistema_digestivo', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('sistema_digestivo')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Sistema Respiratorio', null ) !!}
                    {!! Form::textarea('sistema_respiratorio', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('sistema_respiratorio')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Sistema Endocrino', null ) !!}
                    {!! Form::textarea('sistema_endocrino', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('sistema_endocrino')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Sistema músculo esquelético', null ) !!}
                    {!! Form::textarea('sistema_musculo_esqueletico', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('sistema_musculo_esqueletico')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Sistema nervioso', null ) !!}
                    {!! Form::textarea('sistema_nervioso', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('sistema_nervioso')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Sistema urinario', null ) !!}
                    {!! Form::textarea('sistema_urinario', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('sistema_urinario')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Sistema reproductivo', null ) !!}
                    {!! Form::textarea('sistema_reproductivo', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('sistema_reproductivo')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>        
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Palpación rectal', null ) !!}
                    {!! Form::textarea('palpacion_rectal', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('palpacion_rectal')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>        
            <div class="col-md-4 col-sm-12 col-xl-4">
                <div class="mb-2">
                    {!! Form::label('Otros', null ) !!}
                    {!! Form::textarea('otros', null, ['class'  => 'form-control', 'rows' => 2, ]) !!}
                    @error('otros')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>  
    </div>
</div>
