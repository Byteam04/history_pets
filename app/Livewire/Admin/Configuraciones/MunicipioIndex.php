<?php

namespace App\Livewire\Admin\Configuraciones;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;
use App\Models\Admin\Municipio;

class MunicipioIndex extends Component
{
    use WithPagination;
	
	#[Url]
	
    public $search = '';
    
    public function render()
    {
        $municipios = Municipio::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);
                        
        return view('livewire.admin.configuraciones.municipio-index', compact('municipios'));
    }
}
