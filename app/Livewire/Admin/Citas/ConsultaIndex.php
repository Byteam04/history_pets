<?php

namespace App\Livewire\Admin\Citas;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;

class ConsultaIndex extends Component
{
    use WithPagination;
	
	#[Url]
	
    public $search = '';
    
    public function render()
    {
        $consultas = "";
		/*$consultas = Consulta::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);*/
                        
        return view('livewire.admin.citas.consulta-index', compact('consultas'));
    }
}
