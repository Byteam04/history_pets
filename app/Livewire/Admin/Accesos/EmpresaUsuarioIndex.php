<?php

namespace App\Livewire\Admin\Accesos;

use Livewire\Component;
use Livewire\WithPagination;

class EmpresaUsuarioIndex extends Component
{
    use WithPagination;
    public $search = '';
    
    public function render()
    {
        $empresa_usuarios = "";
        /*$empresa_usuarios = Empresa_usuario::where('name', 'LIKE', '%'.$this->search.'%')
                        ->latest('id')
                        ->paginate(5);*/
                        
        return view('livewire.admin.accesos.empresa-usuario-index', compact('empresa_usuarios'));
    }
}
