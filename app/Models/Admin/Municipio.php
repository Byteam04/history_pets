<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Propietario;
use App\Models\Admin\Departamento;

class Municipio extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Declaración de foraneas
    public function propietario(){
        return $this->hasMany(Propietario::class);
    }
	
	public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
}
