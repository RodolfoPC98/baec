<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    protected $guarded = [];

    // // Relacion uno a muchos (inversa)
    // public function edificios(){
    //     return $this->belongsTo('App\Models\Edificio');
    // }

    // // Relacion uno a muchos
    // public function responsables(){
    //     return $this->hasMany('App\Models\Responsable');
    // }

    // Relacion uno a muchos
    public function bien(){
        return $this->hasMany(bien::class);
    }
}
