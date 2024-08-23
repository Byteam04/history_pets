<?php

namespace App\Livewire\Admin\Accesos;

//use Spatie\Permission\Models\Rol;
use Livewire\Component;
use Livewire\WithPagination;

class RolIndex extends Component
{
    use WithPagination;
    public $search = '';
    
    public function render()
    {
        $roles = "";
        /*$roles = Rol::where('name', 'LIKE', '%'.$this->search.'%')
                        ->latest('id')
                        ->paginate(5);*/
                        
        return view('livewire.admin.accesos.rol-index', compact('roles'));
    }
}
