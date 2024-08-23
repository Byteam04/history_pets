<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Propietario;
use App\Models\Admin\Color;
use App\Models\Admin\Pelaje;
use App\Models\Admin\Especie;
use App\Models\Admin\Raza;
use App\Models\Admin\Cita;

class Mascota extends Model
{
    use HasFactory;
    
	protected $guarded = ['id', 'created_at', 'updated_at'];
	
	public function propietario(){
        return $this->belongsTo(Propietario::class);
    }
	
	public function color(){
        return $this->belongsTo(Color::class);
    }
	
	public function pelaje(){
        return $this->belongsTo(Pelaje::class);
    }
	
	public function especie(){
        return $this->belongsTo(Especie::class);
    }
	
	public function raza(){
        return $this->belongsTo(Raza::class);
    }
	
	public function cita(){
        return $this->hasMany(Cita::class);
    }
}
