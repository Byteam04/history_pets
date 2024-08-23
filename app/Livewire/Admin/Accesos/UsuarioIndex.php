<?php

namespace App\Livewire\Admin\Accesos;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsuarioIndex extends Component
{
    use WithPagination;

    public $search;
    
    
    public function assignRole(user $user, $value){
		
		foreach ($user->roles as $role){
			$user->removeRole($role->name);
		}
		
        if ($value == '1') {
            $user->assignRole('admin');
        }
		else if($value == '2'){
			$user->assignRole('medic');
		}
		else if($value == '3'){
			$user->assignRole('user');
		}

    }
    
    public function render()
    {
        if (auth()->user()->hasRole('admin')) {
			$users = User::where('email', '<>', auth()->user()->email)
						->where(function($query){
							$query->where('name', 'LIKE', '%' . $this->search . '%');
							$query->orwhere('email', 'LIKE', '%' . $this->search . '%');
						})->paginate(10);
		}
		else{
			$users = User::where('email', '=', auth()->user()->email)->paginate(10);
		}
        
        return view('livewire.admin.accesos.usuario-index', compact('users'));
    }
}
