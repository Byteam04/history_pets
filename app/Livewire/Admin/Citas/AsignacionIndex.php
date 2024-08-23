<?php

namespace App\Livewire\Admin\Citas;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;

class AsignacionIndex extends Component
{
    use WithPagination;
	
	#[Url]
	
    public $search = '';
    
    public function render()
    {
        $asignaciones = "";
		/*$asignaciones = Asignacion::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);*/
                        
        return view('livewire.admin.citas.asignacion-index', compact('asignaciones'));
    }
}
