<?php

namespace App\Livewire\Admin\Configuraciones;

use App\Models\Admin\Empresa;
use Livewire\Component;
use Livewire\WithPagination;

class EmpresaIndex extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    
    
    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        /*$empresas = "";*/
        $empresas = Empresa::where('nombre_empresa', 'LIKE', '%'.$this->search.'%')
                        ->latest('id')
                        ->paginate(5);
                        
        return view('livewire.admin.configuraciones.empresa-index', compact('empresas'));
    }
}
