<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioSesionController extends Controller
{
    public function __invoke()
    {
        return view('iniciosesion');
    }
}
