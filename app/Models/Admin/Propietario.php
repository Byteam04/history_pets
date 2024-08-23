<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Mascota;
use App\Models\Admin\TipoIdentificacion;
use App\Models\Admin\Pais;
use App\Models\Admin\Departamento;
use App\Models\Admin\Municipio;
use App\Models\Admin\Cita;

class Propietario extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Declaración de foraneas
    public function mascota(){
        return $this->hasMany(Mascota::class);
    }

    public function cita(){
        return $this->hasMany(Cita::class);
    }

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
}
