<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cambios_pieza extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relacion uno a muchos (inversa)
    public function piezas_minisplit_mural(){
        return $this->belongsTo(piezas_minisplit_mural::class);
    }

    // Relacion uno a muchos (inversa)
    public function minisplit_mural_mantenimiento(){
        return $this->belongsTo(minisplit_mural_mantenimiento::class);
    }
}
