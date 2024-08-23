<?php

namespace App\Livewire\Admin\Configuraciones;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;
use App\Models\Admin\TipoIdentificacion;

class TipoIdentificacionIndex extends Component
{
	use WithPagination;
	
	#[Url]
	
    public $search = '';
	
    public function render()
    {
		/*$tipo_identificaciones = "";*/
		$tipo_identificaciones = TipoIdentificacion::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);
						
        return view('livewire.admin.configuraciones.tipo-identificacion-index', compact('tipo_identificaciones'));
    }
}
