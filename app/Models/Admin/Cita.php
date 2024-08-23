<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Propietario;
use App\Models\Admin\Mascota;
use App\Models\Admin\Historia;
use App\Models\User;

class Cita extends Model
{
    use HasFactory;
	
	protected $guarded = ['id', 'created_at', 'updated_at'];
	
	public function propietario(){
        return $this->belongsTo(Propietario::class);
    }
	
	public function mascota(){
        return $this->belongsTo(Mascota::class);
    }
	
	public function user(){
        return $this->belongsTo(User::class);
    }
	
	public function historia(){
        return $this->hasMany(Historia::class);
    }
}
