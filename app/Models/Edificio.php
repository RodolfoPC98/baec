<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relacion uno a muchos
    public function ubicacion(){
        return $this->hasMany(ubicacion::class);
    }
}
