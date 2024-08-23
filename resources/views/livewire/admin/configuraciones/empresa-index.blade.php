<div>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
		{{--@can('admin.registros.empresas.create')--}}
                <a href="{{route('admin.configuraciones.empresas.create')}}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Crear</a>
					{{-- @endcan --}}

            <br/><br/>

            <input wire:model.live="search" class="form-control" placeholder="Buscar">
        </div>

        @if($empresas)

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Representante</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>

                        @foreach ($empresas as $empresa)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$empresa->nombre_empresa}}</td>
                                <td>{{$empresa->nombre_representante}}</td>
                                <td>{{$empresa->direccion}}</td>
                                <td>{{$empresa->telefono}}</td>
                                <td>{{$empresa->correo}}</td>
                                {{--@can('admin.empresas.edit')--}}
                                    <td width="100px"><a class="btn btn-sm btn-primary" href="{{route('admin.configuraciones.empresas.edit', $empresa)}}"><i class="fas fa-pencil-alt"></i> Editar</a></td>
                                {{--@endcan
                                @can('admin.empresas.destroy')--}}
                                    <td width="150px">
                                        <form id="eliminar" action="{{route('admin.configuraciones.empresas.destroy', $empresa)}}" method="POST">

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
                {{$empresas->links()}}
            </div>
        @else

            <div class="card-body">
                <center><strong>No hay registros disponibles.</strong></center>
            </div>

        @endif
    </div>
</div>
