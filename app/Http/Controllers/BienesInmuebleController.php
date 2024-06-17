<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bienes_inmueble;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BienesInmuebleController extends Controller
{
    public function bienes_inmueble()
    {
        $bienes_inmueble = Bienes_inmueble::all();

        return view('bienes_inmuebles.bienes_inmuebles')->with('bienes_inmueble', $bienes_inmueble);
    }

    public function create(Request $request)
    {
        try {

            $id = $request->input('id', null);
            $calle = $request->input('calle');
            $numero = $request->input('numero');
            $colonia = $request->input('colonia');
            $localidad = $request->input('localidad');
            $entidad_federativa = $request->input('entidad');
            $telefono = $request->input('telefono');
            $predio = $request->input('predio');
            $edificio = $request->input('edificio');
            $unidad_administrativa = $request->input('unidad_administrativa');
            $monto_historico = $request->input('monto_historico');

            $bienes_inmuebles = $id ? Bienes_inmueble::findOrFail($id) : new Bienes_inmueble;
            // if ($id) {
            //     $bienes_inmuebles = Bienes_inmueble::findOrFail($id);
            // } else {
            //     $bienes_inmuebles = new Bienes_inmueble;
            // }
            $bienes_inmuebles->calle = $calle;
            $bienes_inmuebles->numero = $numero;
            $bienes_inmuebles->colonia = $colonia;
            $bienes_inmuebles->localidad = $localidad;
            $bienes_inmuebles->entidad_federativa = $entidad_federativa;
            $bienes_inmuebles->telefono = $telefono;
            $bienes_inmuebles->predio = $predio;
            $bienes_inmuebles->edificio = $edificio;
            $bienes_inmuebles->unidad_administrativa = $unidad_administrativa;
            $bienes_inmuebles->monto_historico = $monto_historico;

            $bienes_inmuebles->save();

            return redirect()->back()->with('success', 'Bien Inmueble guardado correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Bien Inmueble no encontrado');
        }
    }

    public function delete(Request $request){
        try {

            $id = $request->input('id', null);

            $bienes_inmuebles = Bienes_inmueble::findOrFail($id);
            $bienes_inmuebles->delete();

            return redirect()->back()->with('success', 'Bien Inmueble Eliminado correctamente');

        } catch (ModelNotFoundException $e) {
            abort(404, 'Bien Inmueble no encontrado');
        }
    }
}
