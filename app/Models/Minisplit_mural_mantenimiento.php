<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minisplit_mural_mantenimiento extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relacion uno a muchos (inversa)
    public function bien(){
        return $this->belongsTo(bien::class);
    }

    // Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo(user::class);
    }

    // Relacion uno a muchos (inversa)
    public function trabajos_realizado(){
        return $this->belongsTo(trabajos_realizado::class);
    }

    // Relacion uno a muchos
    public function cambios_pieza(){
        return $this->hasMany(cambios_pieza::class);
    }

    // Relacion uno a muchos
    public function img_mantenimiento(){
        return $this->hasMany(img_mantenimiento::class);
    }
}