<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Propietario;
use App\Models\Admin\Pais;
use App\Models\Admin\Municipio;

class Departamento extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Declaración de foraneas
    public function propietario(){
        return $this->hasMany(Propietario::class);
    }
	
	public function pais(){
        return $this->belongsTo(Pais::class);
    }
	
	public function municipio(){
        return $this->hasMany(Municipio::class);
    }
}
