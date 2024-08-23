<?php

namespace App\Livewire\Admin\Configuraciones;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;
use App\Models\Admin\Color;

class ColorIndex extends Component
{
    use WithPagination;
	
	#[Url]
	
    public $search = '';
    
    public function render()
    {
		$colores = Color::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);
						
        return view('livewire.admin.configuraciones.color-index', compact('colores'));
    }
}
