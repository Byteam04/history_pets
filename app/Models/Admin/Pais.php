<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Propietario;
use App\Models\Admin\Departamento;

class Pais extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Declaración de foraneas
    public function propietario(){
        return $this->hasMany(Propietario::class);
    }
	
	public function departamento(){
        return $this->hasMany(Departamento::class);
    }
}
