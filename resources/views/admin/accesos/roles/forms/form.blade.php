<div class="card">
    <div class="card-header text-white w-full ">
        <h4>Descripción del rol</h4>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group w-full flex">
                
                    {!! Form::label('Nombre', null ) !!}					
					
                    {!! Form::text('nombre', null, ['class' => 'form-control','id'=>'name', 'placeholder'=>'Ingrese nombre']) !!}

                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>

    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4>Listado de permisos</h4>
    </div>
    <div class="card-body">
        <div class="row bg-gray-200 border rounded-md grid lg:grid-cols-4 grid-cols-1 gap-4">
            @if ($permisos)
                @foreach ($permisos as $permiso)
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="form-group">
                            <div class="form-control py-3 form-check form-check-inline">
                                {!! Form::checkbox('permissions[]', $permiso->id, null, ['class' => 'form-check-input ml-3 mr-2']) !!}
                                <label class="form-check-label" for="permissions">{{strip_tags($permiso->name)}}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <center><strong>No hay permisos disponibles.</strong></center>
            @endif
        </div>

    </div>
</div>
