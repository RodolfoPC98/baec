<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_bien;
use App\Models\Descripcion_bien;
use App\Models\Modelo;
use App\Models\Ubicacion;
use App\Models\Responsable;
use App\Models\Proveedor;
use App\Models\Bien;
use App\Models\Estado;
use GuzzleHttp\Psr7\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BienesExport;


class BienController extends Controller
{

    public function ver_bienes()
    {
        $bienes = Bien::all();
        $tipo_biens = Tipo_bien::all();
        $descripcion_biens = Descripcion_bien::all();
        $ubicacions = Ubicacion::all();
        $modelos = Modelo::all();
        $proveedors = Proveedor::all();
        $responsables = Responsable::all();
        $estados = Estado::all();

        return view('bienes.ver_bienes')->with('bienes', $bienes)
        ->with('tipo_biens', $tipo_biens)
        ->with('descripcion_biens', $descripcion_biens)
        ->with('ubicacions', $ubicacions)
        ->with('modelos', $modelos)
        ->with('proveedors', $proveedors)
        ->with('responsables', $responsables)
        ->with('estados', $estados);
    }

    public function agregar_bienes(Request $request)
    {
        try {
            $id = $request->input('id', null);
            $nombre_bien = $request->input('nombre_bien');
            $costo_producto = $request->input('costo_producto');
            $n_inventario = $request->input('n_inventario');
            $comentario = $request->input('comentario');
            $factura = $request->input('factura');
            $fecha_factura = $request->input('fecha_factura');
            $estado_id = $request->input('estado_id');
            $proveedor_id = $request->input('proveedor_id');
            $ubicacion_id = $request->input('ubicacion_id');
            $modelo_id = $request->input('modelo_id');
            $responsable_id = $request->input('responsable_id');
            $resguardatorio_id = $request->input('resguardatorio_id');
            $tipo_bien_id = $request->input('tipo_bien_id');
            $descripcion_bien_id = $request->input('descripcion_bien_id');

            $Bien = $id ? Bien::findOrFail($id) : new Bien;
            $Bien->nombre_bien = $nombre_bien;
            $Bien->costo_producto = $costo_producto;
            $Bien->n_inventario = $n_inventario;
            $Bien->comentario = $comentario;
            $Bien->factura = $factura;
            $Bien->fecha_factura = $fecha_factura;
            $Bien->estado_id = $estado_id;
            $Bien->proveedor_id = $proveedor_id;
            $Bien->ubicacion_id = $ubicacion_id;
            $Bien->modelo_id = $modelo_id;
            $Bien->responsable_id = $responsable_id;
            $Bien->resguardatorio_id = $resguardatorio_id;
            $Bien->tipo_bien_id = $tipo_bien_id;
            $Bien->descripcion_bien_id = $descripcion_bien_id;
            $Bien->save();

            return redirect()->back()->with('success', 'Datos guardados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }

    public function eliminar_bienes(Request $request)
    {
        try {

            $id = $request->input('id', null);

            $ubicacion = Bien::findOrFail($id);
            $ubicacion->delete();

            return redirect()->back()->with('success', 'Datos eliminados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }

    public function export_bienes(){
        return Excel::download(new BienesExport, 'Bienes.xlsx');
    }





    // ---------------------------------------------------------------------------------

    public function ver_bienes_computadoras()
    {
        $bienes = Bien::all();
        $tipo_biens = Tipo_bien::all();
        $descripcion_biens = Descripcion_bien::all();
        $ubicacions = Ubicacion::all();
        $modelos = Modelo::all();
        $proveedors = Proveedor::all();
        $responsables = Responsable::all();
        $estados = Estado::all();

        return view('bienes.ver_bienes_computadoras')->with('bienes', $bienes)
        ->with('tipo_biens', $tipo_biens)
        ->with('descripcion_biens', $descripcion_biens)
        ->with('ubicacions', $ubicacions)
        ->with('modelos', $modelos)
        ->with('proveedors', $proveedors)
        ->with('responsables', $responsables)
        ->with('estados', $estados);
    }

    public function agregar_bienes_computadoras(Request $request)
    {
        try {
            $id = $request->input('id', null);
            $nombre_bien = $request->input('nombre_bien');
            $costo_producto = $request->input('costo_producto');
            $n_inventario = $request->input('n_inventario');
            $comentario = $request->input('comentario');
            $factura = $request->input('factura');
            $fecha_factura = $request->input('fecha_factura');
            $estado_id = $request->input('estado_id');
            $proveedor_id = $request->input('proveedor_id');
            $ubicacion_id = $request->input('ubicacion_id');
            $modelo_id = $request->input('modelo_id');
            $responsable_id = $request->input('responsable_id');
            $resguardatorio_id = $request->input('resguardatorio_id');
            $tipo_bien_id = $request->input('tipo_bien_id');

            

            $descripcion_bien = Descripcion_bien::where('descripcion', 'like', 'COMPUTADORA')->first();

            if(isset($descripcion_bien->id)){
                $descripcion_bien_id = $descripcion_bien->id;
            } else {
                $descripcion = new Descripcion_bien;
                $descripcion->descripcion = 'COMPUTADORA';
                $descripcion->save();
                $descripcion_bien_id = $descripcion->id;
            }

            $Bien = $id ? Bien::findOrFail($id) : new Bien;
            
            $Bien->nombre_bien = $nombre_bien;
            $Bien->costo_producto = $costo_producto;
            $Bien->n_inventario = $n_inventario;
            $Bien->comentario = $comentario;
            $Bien->factura = $factura;
            $Bien->fecha_factura = $fecha_factura;
            $Bien->estado_id = $estado_id;
            $Bien->proveedor_id = $proveedor_id;
            $Bien->ubicacion_id = $ubicacion_id;
            $Bien->modelo_id = $modelo_id;
            $Bien->responsable_id = $responsable_id;
            $Bien->resguardatorio_id = $resguardatorio_id;
            $Bien->tipo_bien_id = $tipo_bien_id;
            $Bien->descripcion_bien_id = $descripcion_bien_id;
            $Bien->save();

            return redirect()->back()->with('success', 'Datos guardados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }

    public function eliminar_bienes_computadoras(Request $request)
    {
        try {

            $id = $request->input('id', null);

            $ubicacion = Bien::findOrFail($id);
            $ubicacion->delete();

            return redirect()->back()->with('success', 'Datos eliminados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }





    // ---------------------------------------------------------------------------------

    public function ver_tipo_bienes()
    {
        $tipo_bien = Tipo_bien::all();
        return view('bienes.ver_tipo_bienes')->with('tipo_biens', $tipo_bien);
    }

    public function agregar_tipo_bien(Request $request)
    {
        try {
            $id = $request->input('id', null);
            $descripcion = $request->input('descripcion');

            $tipo_bien = $id ? Tipo_bien::findOrFail($id) : new Tipo_bien;
            $tipo_bien->descripcion = $descripcion;

            $tipo_bien->save();

            return redirect()->back()->with('success', 'Tipo de bien guardado correctamente'); //code...
        } catch (ModelNotFoundException $e) {
            abort(404, 'Tipo de bien no encontrado');
        }
    }

    public function delete_tipo_bien(Request $request)
    {
        try {

            $id = $request->input('id', null);

            $tipo_bien = Tipo_bien::findOrFail($id);
            $tipo_bien->delete();

            return redirect()->back()->with('success', 'Tipo Bien Eliminado Correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Tipo Bien No Encontrado');
        }
    }




    // ------------------------------------------------------------------------------------------

    public function ver_descripcion_bienes()
    {
        $descripcion_bien = Descripcion_bien::all();

        return view('bienes.ver_descripcion_bienes')->with('descripcion_biens', $descripcion_bien);
    }

    public function agregar_descripcion_bien(Request $request)
    {
        try {
            $id = $request->input('id', null);
            $descripcion = $request->input('descripcion');

            $descripcion_bien = $id ? Descripcion_bien::findOrFail($id) : new Descripcion_bien;
            $descripcion_bien->descripcion = $descripcion;
            $descripcion_bien->save();

            return redirect()->back()->with('success', 'Descripción de bien guardado correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Descripción de Bien No Encontrado');
        }
    }

    public function eliminar_descripcion_bien(Request $request)
    {
        try {

            $id = $request->input('id', null);

            $descripcion_bien = Descripcion_bien::findOrFail($id);
            $descripcion_bien->delete();

            return redirect()->back()->with('success', 'Descripción de bien guardado correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Descripción de Bien No Encontrado');
        }
    }




    // ------------------------------------------------------------------------------------------

    public function ver_modelos_y_marcas()
    {
        $modelos = Modelo::all();

        return view('bienes.ver_modelos_y_marcas')->with('modelos', $modelos);
    }

    public function agregar_modelos_y_marcas(Request $request)
    {
        try {

            $modelo = $request->input('id', null) ? Modelo::findOrFail($request->input('id', null)) : new Modelo;
            $modelo->marca = $request->input('marca');
            $modelo->nombre = $request->input('nombre');
            $modelo->serie = $request->input('serie');
            $modelo->save();

            return redirect()->back()->with('success', 'Datos guardados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }

    public function eliminar_modelos_y_marcas(Request $request)
    {
        try {

            // $id = $request->input('id', null);

            $modelo = Modelo::findOrFail($request->input('id', null));
            $modelo->delete();

            return redirect()->back()->with('success', 'Datos eliminados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }




    // ------------------------------------------------------------------------------------------

    public function ver_ubicaciones()
    {
        $ubicaciones = Ubicacion::all();

        return view('bienes.ver_ubicaciones')->with('ubicaciones', $ubicaciones);
    }

    public function agregar_ubicaciones(Request $request)
    {
        try {
            $id = $request->input('id', null);
            $nombre = $request->input('nombre');
            $edificio = $request->input('edificio');

            $ubicacion = $id ? Ubicacion::findOrFail($id) : new Ubicacion;
            $ubicacion->nombre = $nombre;
            $ubicacion->edificio = $edificio;
            $ubicacion->save();

            return redirect()->back()->with('success', 'Datos guardados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }

    public function eliminar_ubicaciones(Request $request)
    {
        try {

            $id = $request->input('id', null);

            $ubicacion = Ubicacion::findOrFail($id);
            $ubicacion->delete();

            return redirect()->back()->with('success', 'Datos eliminados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }






    // ------------------------------------------------------------------------------------------

    public function ver_responsables()
    {
        $responsables = Responsable::all();

        return view('bienes.ver_responsables')->with('responsables', $responsables);
    }

    public function agregar_responsables(Request $request)
    {
        try {
            $id = $request->input('id', null);
            $nombre = $request->input('nombre', null);
            // $apellidos = $request->input('apellidos','no existe');
            $telefono = $request->input('telefono');
            $correo = $request->input('correo');

            $responsable = $id ? Responsable::findOrFail($id) : new Responsable;
            $responsable->nombre = $nombre;
            $responsable->apellidos = $request->input('apellidos','no existe');
            $responsable->telefono = $telefono;
            $responsable->correo = $correo;
            $responsable->save();

            return redirect()->back()->with('success', 'Datos guardados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }

    public function eliminar_responsables(Request $request)
    {
        try {

            $id = $request->input('id', null);

            $ubicacion = Responsable::findOrFail($id);
            $ubicacion->delete();

            return redirect()->back()->with('success', 'Datos eliminados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }






    // ------------------------------------------------------------------------------------------

    public function ver_proveedores()
    {
        $proveedores = Proveedor::all();

        return view('bienes.ver_proveedores')->with('proveedores', $proveedores);
    }

    public function agregar_proveedores(Request $request)
    {
        try {
            $id = $request->input('id', null);
            $contacto_nombre_completo = $request->input('contacto_nombre_completo', null);
            $contacto_cp = $request->input('contacto_cp', null);
            $contacto_correo = $request->input('contacto_correo', null);
            $contacto_telefono = $request->input('contacto_telefono', null);
            $nombre = $request->input('nombre', null);
            $ubicacion = $request->input('ubicacion', null);
            $n_identificacion = $request->input('n_identificacion', null);
            $tipo_negocio = $request->input('tipo_negocio', null);
            $rfc = $request->input('rfc', null);
            $correo = $request->input('correo', null);
            $telefono = $request->input('telefono', null);
            $padron = $request->input('padron', null);
            $razon_social = $request->input('razon_social', null);
            $apoderado_legal = $request->input('apoderado_legal', null);
            $giro = $request->input('giro', null);

            $Proveedor = $id ? Proveedor::findOrFail($id) : new Proveedor;
            $Proveedor->contacto_nombre_completo = $contacto_nombre_completo;
            $Proveedor->contacto_cp = $contacto_cp;
            $Proveedor->contacto_correo = $contacto_correo;
            $Proveedor->contacto_telefono = $contacto_telefono;
            $Proveedor->nombre = $nombre;
            $Proveedor->ubicacion = $ubicacion;
            $Proveedor->n_identificacion = $n_identificacion;
            $Proveedor->tipo_negocio = $tipo_negocio;
            $Proveedor->rfc = $rfc;
            $Proveedor->correo = $correo;
            $Proveedor->telefono = $telefono;
            $Proveedor->padron = $padron;
            $Proveedor->razon_social = $razon_social;
            $Proveedor->apoderado_legal = $apoderado_legal;
            $Proveedor->giro = $giro;
            $Proveedor->save();

            return redirect()->back()->with('success', 'Datos guardados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }

    public function eliminar_proveedores(Request $request)
    {
        try {

            $id = $request->input('id', null);

            $proveedor = Proveedor::findOrFail($id);
            $proveedor->delete();

            return redirect()->back()->with('success', 'Datos eliminados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }
    



    

    // ------------------------------------------------------------------------------------------

    public function ver_estados()
    {
        $estados = Estado::all();

        return view('bienes.ver_estados')->with('estados', $estados);
    }

    public function agregar_estados(Request $request)
    {
        try {
            $id = $request->input('id', null);
            $descripcion = $request->input('descripcion');

            $proveedor = $id ? Estado::findOrFail($id) : new Estado;
            $proveedor->descripcion = $descripcion;
            $proveedor->save();

            return redirect()->back()->with('success', 'Datos guardados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }

    public function eliminar_estados(Request $request)
    {
        try {

            $id = $request->input('id', null);

            $estado = Estado::findOrFail($id);
            $estado->delete();

            return redirect()->back()->with('success', 'Datos eliminados correctamente');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Datos No Encontrados');
        }
    }
}
