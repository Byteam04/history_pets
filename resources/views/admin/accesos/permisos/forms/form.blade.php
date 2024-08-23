<div class="form-group w-full flex">

    {!! Form::label('Nombre', null ) !!}					
					
    {!! Form::text('nombre', null, ['class' => 'form-control','id'=>'name', 'placeholder'=>'Ingrese nombre']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

