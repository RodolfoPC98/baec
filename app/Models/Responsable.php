<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inversa)
    public function ubicacions(){
        return $this->belongsTo('App\Models\Ubicacion');
    }

    // Relacion uno a muchos
    public function biens(){
        return $this->hasMany('App\Models\Bien');
    }
}
