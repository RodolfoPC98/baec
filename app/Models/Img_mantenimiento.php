<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img_mantenimiento extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function minisplit_mural_mantenimiento(){
        return $this->hasMany(minisplit_mural_mantenimiento::class);
    }
}
