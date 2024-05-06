<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function biens(){
        return $this->hasMany('App\Models\Bien');
    }
}
