<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function ubicacions(){
        return $this->hasMany('App\Models\Ubicacion');
    }
}
