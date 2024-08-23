<?php

namespace App\Livewire\Admin\HistoriasClinicas;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;

class HistoriasIndex extends Component
{
    use WithPagination;
	
	#[Url]
	
    public $search = ''; 
    
    public function render()
    {
         $historias = "";
		/*$historias = Historia::orderBy('id', 'desc')
						->where('nombre', 'LIKE', '%'.$this->search.'%')
                        ->paginate(5);*/
        return view('livewire.admin.historias-clinicas.historias-index', compact('historias'));
    }
}
