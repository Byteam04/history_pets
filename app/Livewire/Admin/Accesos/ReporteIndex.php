<?php

namespace App\Livewire\Admin\Accesos;

use Livewire\Component;
use Livewire\WithPagination;

class ReporteIndex extends Component
{
    use WithPagination;
    public $search = '';
    
    public function render()
    {
        $reportes = "";
        /*$reportes = Reporte::where('name', 'LIKE', '%'.$this->search.'%')
                        ->latest('id')
                        ->paginate(5);*/
                        
        return view('livewire.admin.accesos.reporte-index', compact('reportes'));
    }
}
