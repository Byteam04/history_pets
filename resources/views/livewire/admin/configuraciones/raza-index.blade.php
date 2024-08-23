<div>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
		{{--@can('admin.registros.razas.create')--}}
                <a href="{{route('admin.configuraciones.razas.create')}}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Crear</a>
					{{-- @endcan --}}

            <br/><br/>

            <input wire:model.live="search" class="form-control" placeholder="Buscar">
        </div>

        @if($razas)

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Especie</th>
                            <th>Estado</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>

                        @foreach ($razas as $raza)
						
							<?php
								if($raza->estado == 1){
									$estado = "Activo";
								}
								else{
									$estado = "Inactivo";
								}
							?>
							
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$raza->nombre}}</td>
                                <td>{{$raza->especie_id}}</td>
                                <td>{{$estado}}</td>
                                {{--@@can('admin.configuraciones.razas.edit')--}}
                                    <td width="100px"><a class="btn btn-sm btn-primary" href="{{route('admin.configuraciones.razas.edit', $raza)}}"><i class="fas fa-pencil-alt"></i> Editar</a></td>
                                {{--@@endcan
                                @can('admin.configuraciones.razas.destroy')--}}
                                    <td width="150px">
                                        <form id="eliminar" action="{{route('admin.configuraciones.razas.destroy', $raza)}}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                        </form>
                                    </td>
                                {{--@@endcan--}}
                            </tr>
                            <?php $i ++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$razas->links()}}
            </div>
        @else

            <div class="card-body">
                <center><strong>No hay registros disponibles.</strong></center>
            </div>

        @endif
    </div>
</div>

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('js/btn_eliminar.js')}}"></script>
@stop
