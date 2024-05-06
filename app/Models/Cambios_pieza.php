<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cambios_pieza extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inversa)
    public function piezas_minisplit_murals(){
        return $this->belongsTo('App\Models\Piezas_minisplit_mural');
    }

    // Relacion uno a muchos (inversa)
    public function minisplit_mural_mantenimientos(){
        return $this->belongsTo('App\Models\Minisplit_mural_mantenimiento');
    }
}
