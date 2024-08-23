<?php

namespace App\Livewire\Admin\Configuraciones;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;
use App\Models\Admin\Pelaje;

class PelajeIndex extends Component
{
    use WithPagination;
	
	#[Url]
	
    public $search = '';
    
    public function render()
    {
        /*$pelajes = "";*/
		$pelajes = Pelaje::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);
        return view('livewire.admin.configuraciones.pelaje-index', compact('pelajes'));
    }
}
