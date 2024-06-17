<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piezas_minisplit_mural extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relacion uno a muchos
    public function cambios_pieza(){
        return $this->hasMany(cambios_pieza::class);
    }
}
