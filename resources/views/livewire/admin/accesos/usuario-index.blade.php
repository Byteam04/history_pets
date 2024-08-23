<div>
    <x-slot name="header">
        <div class="flex items-center pt-[155px] pb-[20px]">
            <h2>
                <div class="font-semibold text-xl text-gray-600 leading-tight uppercase">
                    {{ __('Users') }}
                </div>
            </h2>
        </div>
    </x-slot>    
    <div class="container py-12">
        
		<div class="px-6 py-4">
			<x-input wire:model="search" class="w-full" type="text"
				placeholder="Ingrese el nombre del usuario que quiere buscar"></x-input>
		</div>		

		<x-table-responsive>
			 @if ($users)
                <table class="min-w-full divide-y divide-gray-200 overflow-x-scroll">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                {{__('ID')}}
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                {{__('Name')}}
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                {{__('Email')}}
                            </th>							
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                {{__('Role')}}
                            </th>
							<th scope="col"
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                {{__('Edit Profile')}}
                            </th>
                            <th scope="col" 
								class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                {{__('Edit File')}}
                            </th>
							@hasrole('admin')
							<th scope="col" 
								class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase bg-gray-50">
                                {{__('Assign Role')}}
                            </th>
							@endhasrole
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 overflow-scroll">
                        @foreach ($users as $user)
                            <tr wire:key="{{$user->email}}">
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $user->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $user->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $user->email }}
                                    </div>
                                </td>								
                                <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                    <div class="text-sm text-gray-900">
										@php
											$rol = 0;
										@endphp
												
                                        @if (count($user->roles))
											@foreach ($user->roles as $role)

												@php
													$rol = $role->id;
												@endphp

												@if ($role->id == 1)
													{{ __('Admin') }}
												@elseif($role->id == 2)
													{{ __('Medic') }}
												@elseif($role->id == 3)
													{{ __('User') }}	
												@endif
											@endforeach
                                        @else
                                            {{ __('Has no role') }}
                                        @endif
                                    </div>
                                </td>
								<td class="px-6 py-4 text-sm whitespace-no-wrap">
									<div class="flex text-center">
										<a href="{{ route('admin.users.edit', $user) }}"
											class="text-white bg-indigo-600 px-6 py-2  hover:bg-indigo-800 rounded-lg text-center">
											<i class="fas fa-pencil-alt mr-2"></i><span>{{__('Edit')}}</span>
										</a>
									</div>									
                                </td>
								<td class="px-6 py-4 text-sm whitespace-no-wrap">
									<div class="flex text-center">
										<a href="{{ route('admin.users.files', $user) }}"
											class="text-white bg-indigo-600 px-6 py-2  hover:bg-indigo-800 rounded-lg text-center">
											<i class="fa-solid fa-file-arrow-up mr-2"></i><span>{{__('Upload files')}}</span>
										</a>
									</div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium mt-2 leading-5 text-right whitespace-no-wrap">
								@hasrole('admin')
								<span class="hidden">{{$rol}}</span>
								    <div class="block text-center">
										<label class="ml-2 flex">
											<input class="mr-2 text-sm" {{$rol == 1 ? 'checked' : ''}} type="radio" value="1" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
											{{__('Admin')}}
										</label> 	
										<label class="ml-2 flex">
											<input class="mr-2" {{$rol == 2 ? 'checked' : ''}} type="radio" value="2" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
											{{__('Medic')}}
										</label> 
										<label class="ml-2 flex">
											<input class="mr-2" {{$rol == 3 ? 'checked' : ''}} type="radio" value="3" name="{{$user->email}}" wire:change="assignRole({{$user->id}}, $event.target.value)">
											{{__('User')}}
										</label>
									</div>
								@endhasrole
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4 text-gray-300">
                    {{__('There is no record that can match')}}
                </div>
            @endif
		</x-table-responsive>
				
		@if ($users->hasPages())
			<div class="px-6 py-4">
				{{ $users->links() }}
			</div>
		@endif 
	</div>
</div>


