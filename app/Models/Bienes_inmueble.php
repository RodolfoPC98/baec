<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bienes_inmueble extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo(user::class);
    }
}
