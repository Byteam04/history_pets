<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Cita;
use App\Models\User;

class Historia extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];
	
	public function cita(){
        return $this->belongsTo(Cita::class);
    }
	
	public function user(){
        return $this->belongsTo(User::class);
    }
}
