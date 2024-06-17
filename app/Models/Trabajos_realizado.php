<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajos_realizado extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relacion uno a muchos
    public function minisplit_mural_mantenimiento(){
        return $this->hasMany(minisplit_mural_mantenimiento::class);
    }
}
