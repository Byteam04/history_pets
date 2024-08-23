<?php

namespace App\Livewire\Admin\Configuraciones;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;
use App\Models\Admin\Especie;

class EspecieIndex extends Component
{
    use WithPagination;
	
	#[Url]
	
    public $search = '';
    
    public function render()
    {
        
		$especies = Especie::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);
						
        return view('livewire.admin.configuraciones.especie-index', compact('especies'));
    }
}
