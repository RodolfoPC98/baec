<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inversa)
    public function edificios(){
        return $this->belongsTo('App\Models\Edificio');
    }

    // Relacion uno a muchos
    public function responsables(){
        return $this->hasMany('App\Models\Responsable');
    }

    // Relacion uno a muchos
    public function biens(){
        return $this->hasMany('App\Models\Bien');
    }
}
