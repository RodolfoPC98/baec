<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function bien(){
        return view('reportes.bienes');
    }

    public function mantenimiento(){
        return view('reportes.mantenimientos');
    }
}
