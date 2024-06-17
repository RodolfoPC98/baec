<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    // Relacion uno a muchos (inversa)
    public function modelo(){
        return $this->belongsTo(modelo::class);
    }

    // Relacion uno a muchos (inversa)
    public function descripcion_bien(){
        return $this->belongsTo(descripcion_bien::class);
    }

    // Relacion uno a muchos (inversa)
    public function tipo_bien(){
        return $this->belongsTo(tipo_bien::class);
    }

    // Relacion uno a muchos (inversa)
    public function estado(){
        return $this->belongsTo(estado::class);
    }

    // Relacion uno a muchos (inversa)
    public function proveedor(){
        return $this->belongsTo(proveedor::class);
    }

    // Relacion uno a muchos (inversa)
    public function ubicacion(){
        return $this->belongsTo(ubicacion::class);
    }

    // Relacion uno a muchos (inversa)
    public function responsable(){
        return $this->belongsTo(responsable::class);
    }

    // // Relacion uno a muchos (inversa)
    // public function users(){
    //     return $this->belongsTo('App\Models\User');
    // }

    // Relacion uno a muchos
    public function minisplit_mural_mantenimiento(){
        return $this->hasMany(minisplit_mural_mantenimiento::class);
    }
}
