<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\TipoIdentificacion;
use App\Models\Admin\EmpresaUser;
use App\Models\Admin\Pais;
use App\Models\Admin\Departamento;
use App\Models\Admin\Municipio;
//use App\Models\Image;

class Empresa extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];
	
	public function tipoIdentificacion(){
        return $this->belongsTo(TipoIdentificacion::class);
    }
	
	public function pais(){
        return $this->belongsTo(Pais::class);
    }

    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
	
	public function empresaUser(){
        return $this->hasMany(EmpresaUser::class);
    }
	
	/*public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }*/
}
