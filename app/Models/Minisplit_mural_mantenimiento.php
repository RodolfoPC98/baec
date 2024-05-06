<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minisplit_mural_mantenimiento extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inversa)
    public function biens(){
        return $this->belongsTo('App\Models\Bien');
    }

    // Relacion uno a muchos (inversa)
    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    // Relacion uno a muchos (inversa)
    public function trabajos_realizados(){
        return $this->belongsTo('App\Models\Trabajos_realizados');
    }

    // Relacion uno a muchos
    public function cambios_piezas(){
        return $this->hasMany('App\Models\Cambios_pieza');
    }

    // Relacion uno a muchos
    public function img_mantenimientos(){
        return $this->hasMany('App\Models\Img_mantenimiento');
    }
}