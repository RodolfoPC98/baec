<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inversa)
    public function modelos(){
        return $this->belongsTo('App\Models\Modelo');
    }

    // Relacion uno a muchos (inversa)
    public function descripcion_biens(){
        return $this->belongsTo('App\Models\Descripcion_bien');
    }

    // Relacion uno a muchos (inversa)
    public function tipo_biens(){
        return $this->belongsTo('App\Models\Tipo_bien');
    }

    // Relacion uno a muchos (inversa)
    public function estados(){
        return $this->belongsTo('App\Models\Estado');
    }

    // Relacion uno a muchos (inversa)
    public function proveedors(){
        return $this->belongsTo('App\Models\Proveedor');
    }

    // Relacion uno a muchos (inversa)
    public function ubicacions(){
        return $this->belongsTo('App\Models\Ubicacion');
    }

    // Relacion uno a muchos (inversa)
    public function responsables(){
        return $this->belongsTo('App\Models\Responsable');
    }

    // Relacion uno a muchos (inversa)
    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    // Relacion uno a muchos
    public function minisplit_mural_mantenimientos(){
        return $this->hasMany('App\Models\Minisplit_mural_mantenimiento');
    }
}
