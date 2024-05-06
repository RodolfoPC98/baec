<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajos_realizado extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function minisplit_mural_mantenimientos(){
        return $this->hasMany('App\Models\Minisplit_mural_mantenimiento');
    }
}
