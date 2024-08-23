<div>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
		{{--@can('admin.accesos.empresa_usuarios.create')--}}
                <a href="{{route('admin.accesos.empresa_usuarios.create')}}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Crear</a>
					{{-- @endcan --}}

            <br/><br/>

            <input wire:model.live="search" class="form-control" placeholder="Buscar">
        </div>

        @if($empresa_usuarios)

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>

                        @foreach ($empresa_usuarios as $empresa_usuario)
						
							<?php
								if($empresa_usuario->estado == 1){
									$estado = "Activo";
								}
								else{
									$estado = "Inactivo";
								}
							?>
							
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$empresa_usuario->nombre}}</td>
                                <td>{{$estado}}</td>
                                @can('admin.accesos.empresa_usuarios.edit')
                                    <td width="100px"><a class="btn btn-sm btn-primary" href="{{route('admin.accesos.empresa_usuarios.edit', $empresa_usuario)}}"><i class="fas fa-pencil-alt"></i> Editar</a></td>
                                @endcan
                                @can('admin.accesos.empresa_usuarios.destroy')
                                    <td width="150px">
                                        <form id="eliminar" action="{{route('admin.accesos.empresa_usuarios.destroy', $empresa_usuario)}}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                            <?php $i ++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{$empresa_usuarios->links()}}
            </div>
        @else

            <div class="card-body">
                <center><strong>No hay accesos disponibles.</strong></center>
            </div>

        @endif
    </div>
</div>

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('js/btn_eliminar.js')}}"></script>
@stop
