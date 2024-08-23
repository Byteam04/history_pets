<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Mascota;

class Pelaje extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];
	
	public function mascota(){
        return $this->hasMany(Mascota::class);
    }
}
