<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relacion uno a muchos (inversa)
    public function ubicacion(){
        return $this->belongsTo(ubicacion::class);
    }

    // Relacion uno a muchos
    public function bien_responsable(){
        return $this->hasMany(bien::class, 'responsable_id');
    }

    public function bien_resguardatorio(){
        return $this->hasMany(bien::class, 'resguardatorio_id');
    }
}
