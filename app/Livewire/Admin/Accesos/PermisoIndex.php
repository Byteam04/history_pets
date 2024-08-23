<?php

namespace App\Livewire\Admin\Accesos;

use Livewire\Component;
use Livewire\WithPagination;
//use Spatie\Permission\Models\Permisos;

class PermisoIndex extends Component
{
    use WithPagination;
    public $search;
    
    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $permisos = "";
        /*$permisos = Permisos::where('name', 'LIKE', '%'.$this->search.'%')
                        ->latest('id')
                        ->paginate(5);*/
                        
        return view('livewire.admin.accesos.permiso-index', compact('permisos'));
    }
}
