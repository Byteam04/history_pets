<?php

namespace App\Livewire\Admin\Registros;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;

class MascotaIndex extends Component
{
    use WithPagination;
	
	#[Url]
	
    public $search = '';
    
    public function render()
    {
        $mascotas = "";
		/*$mascotas = Mascota::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);*/
        return view('livewire.admin.registros.mascota-index', compact('mascotas'));
    }
}
