<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Empresa;
use App\Models\User;

class EmpresaUser extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];
	
	public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
	
	public function user(){
        return $this->belongsTo(User::class);
    }
}
