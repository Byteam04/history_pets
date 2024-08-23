<?php

namespace App\Livewire\Admin\Registros;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;

class PropietarioIndex extends Component
{
	use WithPagination;
	
	#[Url]
	
    public $search = '';
	
    public function render()
    {
		$propietarios = "";
		/*$propietarios = Propietario::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);*/
						
        return view('livewire.admin.registros.propietario-index', compact('propietarios'));
    }
}
