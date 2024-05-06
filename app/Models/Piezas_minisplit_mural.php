<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piezas_minisplit_mural extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function cambios_piezas(){
        return $this->hasMany('App\Models\Cambios_Pieza');
    }
}
