<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bienes_inmueble extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inversa)
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
