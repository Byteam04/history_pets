<div>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
		{{--@can('admin.registros.tipo_identificaciones.create')--}}
                <a href="{{route('admin.configuraciones.tipo_identificaciones.create')}}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Crear</a>
					{{-- @endcan --}}

            <br/><br/>

            <input wire:model.live="search" class="form-control" placeholder="Buscar">
        </div>

        @if($tipo_identificaciones)

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>

                        @foreach ($tipo_identificaciones as $tipo_identificacion)
						
							<?php
								if($tipo_identificacion->estado == 1){
									$estado = "Activo";
								}
								else{
									$estado = "Inactivo";
								}
							?>
							
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$tipo_identificacion->nombre}}</td>
                                <td>{{$estado}}</td>
                                {{--@can('admin.configuraciones.tipo_identificaciones.edit')--}}
                                    <td width="100px"><a class="btn btn-sm btn-primary" href="{{route('admin.configuraciones.tipo_identificaciones.edit', $tipo_identificacion)}}"><i class="fas fa-pencil-alt"></i> Editar</a></td>
                                {{--@endcan
                                @can('admin.configuraciones.tipo_identificaciones.destroy')--}}
                                    <td width="150px">
                                        <form id="eliminar" action="{{route('admin.configuraciones.tipo_identificaciones.destroy', $tipo_identificacion)}}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                        </form>
                                    </td>
                                {{--@endcan--}}
                            </tr>
                            <?php $i ++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$tipo_identificaciones->links()}}
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
