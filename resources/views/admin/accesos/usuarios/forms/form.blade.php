<div class="px-6 py-4 ">
	<div class="grid grid-flow-row auto-rows-max justify-items-start w-full flex">
		<div class="mb-2">
			<x-label>
				{{ __('File one') }}
			</x-label>									  
			<div class="flex w-full h-screen items-center justify-center bg-grey-lighter mt-2">
				<label class="w-full flex items-center px-4 py-2 bg-white text-gray-500 rounded-lg shadow-lg tracking-wide uppercase border border-gray-300 cursor-pointer hover:bg-blue-600 hover:text-white">
					<i class="fas fa-paperclip fa-md mr-2"></i>
					<span for="file_one" class="mt-2 text-base leading-normal">{{ __('Select a file') }}</span>						
					<input accept="pdf/*" type='file' name="file_one" class="hidden" id="file_one" />
				</label>					
			</div>
			<p id="return" class="file-return"></p>
		</div>
		<input type="hidden" name="file_one_hide" value="{{$user->file_one}}">
		@error('file_one')
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
</div>
<div class="card">
    <div class="card-header text-white w-full ">
        <h4>Cargar Archivos</h4>
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