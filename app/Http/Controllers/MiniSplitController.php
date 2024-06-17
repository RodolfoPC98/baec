<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniSplitController extends Controller
{
    public function ver_mantenimientos(){
        return view('minisplit.ver_mantenimientos');
    }

    public function mantenimiento(){
        return view('minisplit.mantenimiento');
    }

    public function actualizar_mantenimiento(){
        return view('minisplit.actualizar_mantenimiento');
    }

    public function ver_piezas(){
        return view('minisplit.ver_piezas');
    }
}
