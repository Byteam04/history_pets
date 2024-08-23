<div>

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card shadow-lg rounded rounded-md">	
		<div class="card-header">							
			
			{{--@can('admin.accesos.permisos.create')--}}
				<a href="{{route('admin.accesos.permisos.create')}}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Crear</a>
			{{--@endcan--}}
			<br/><br/>
			<x-input wire:model="search" class="w-full form-control text-center" type="text" placeholder="{{__('Search rol')}}"></x-input>
				
			</div>

		@if($permisos)
			<div class="card-body py-4">
				<table class="table table-striped min-w-full text-gray-600">
					<thead class="border-b border-gray-300">
						<tr class="text-center">
							<th scope="col"
								class="px-6 py-3 text-left">
								ID
							</th>
							<th scope="col"
								class="px-6 py-3 text-left">
								{{__('Description')}}
							</th>
							<th scope="col"
								class="px-6 py-3">
								{{__('Action')}}
							</th>
						</tr>
					</thead>
					<tbody class="divide-y divide-gray-300 bg-white">
						<?php $i = 1; ?>

						@foreach ($permisos as $permiso)
							<tr>
								<td class="px-6 py-4 whitespace-no-wrap text-left">
									<span class="inline-block w-full mr-4">
									{{$i}}
									</span>								
								</td>
								<td class="px-6 py-4 whitespace-no-wrap text-left">
									<span class="inline-block w-full mr-2">
									{{$permiso->name}}
									</span>								
								</td>
								
									{{--@can('admin.accesos.permisos.edit')--}}
									
									<td width="100px"class="font-bold"> 
										<a class="pr-2 hover:text-blue-600 cursor-pointer" href="{{route('admin.accesos.permisos.edit', $permiso)}}">
											<i class="fas fa-pencil-alt mr-2"></i> {{ __('Edit') }}
										</a>
									</td>
								{{--@endcan
								@can('admin.accesos.permisos.destroy')--}}
									<td width="150px">
										<form id="eliminar" action="{{route('admin.accesos.permisos.destroy', $permiso)}}" method="POST">
											@csrf
											@method('DELETE')
											<button type="submit" class="pl-2 hover:text-red-600 cursor-pointer font-bold">
												<i class="fas fa-trash-alt mr-2"></i>{{ __('Remove') }}
											</button>
										</form>
									</td>
								{{--@endcan--}}
							</tr>
							<?php $i ++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="px-6 py-4">
					{{ $permisos->links() }}
				</div>
			@else
				<div class="card-body">
					<center><strong>No hay registros disponibles.</strong></center>
				</div>
			@endif
    </div>
</div>


