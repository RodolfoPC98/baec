<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_bien extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relacion uno a muchos
    public function bien(){
        return $this->hasMany(bien::class);
    }
}
