@extends('layouts.plantilla')

@section('title', 'Editar Bien')

@section('content')



<div class="container mt-5">
    <h2>Formulario de Bienes</h2>
    <form>
        <div class="form-group">
            <label for="nombre_bien">Nombre del Bien</label>
            <input type="text" class="form-control" id="nombre_bien" name="nombre_bien" maxlength="45" placeholder="Introduzca el nombre del bien...">
        </div>
        <div class="form-group">
            <label for="costo_producto">Costo del Producto</label>
            <input type="number" step="0.01" class="form-control" id="costo_producto" name="costo_producto" placeholder="Introduzca el costo del producto...">
        </div>
        <div class="form-group">
            <label for="n_inventario">Número de Inventario</label>
            <input type="text" class="form-control" id="n_inventario" name="n_inventario" maxlength="45" placeholder="Introduzca el número de inventario...">
        </div>
        <div class="form-group">
            <label for="comentario">Comentario</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="4" maxlength="1000" placeholder="Introduzca comentario adicional..."></textarea>
        </div>
        <div class="form-group">
            <label for="factura">Factura</label>
            <input type="text" class="form-control" id="factura" name="factura" maxlength="45" placeholder="Introduzca número de factura...">
        </div>
        <div class="form-group">
            <label for="fecha_factura">Fecha de Factura</label>
            <input type="datetime-local" class="form-control" id="fecha_factura" name="fecha_factura" placeholder="Introduzca la fecha de factura...">
        </div>
        
        <div class="mb-3">
            <label for="provider" class="form-label">Seleccione un Proveedor</label>
            <select class="form-select" id="provider" name="provider">
                <option value="#">Seleccione una opción</option>
                <option value="#">Proveedor 1</option>
                <option value="#">Proveedor 2</option>
                <option value="#">Proveedor 3</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="provider" class="form-label">Seleccione una ubicación</label>
            <select class="form-select" id="provider" name="provider">
                <option value="#">Seleccione una opción</option>
                <option value="#">Ubicación 1</option>
                <option value="#">Ubicación 2</option>
                <option value="#">Ubicación 3</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="provider" class="form-label">Seleccione un Modelo</label>
            <select class="form-select" id="provider" name="provider">
                <option value="#">Seleccione una opción</option>
                <option value="#">Modelo 1</option>
                <option value="#">Modelo 2</option>
                <option value="#">Modelo 3</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="provider" class="form-label">Seleccione un Responsable</label>
            <select class="form-select" id="provider" name="provider">
                <option value="#">Seleccione una opción</option>
                <option value="#">Responsable 1</option>
                <option value="#">Responsable 2</option>
                <option value="#">Responsable 3</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="provider" class="form-label">Seleccione un Estado</label>
            <select class="form-select" id="provider" name="provider">
                <option value="#">Seleccione una opción</option>
                <option value="#">Nuevo 1</option>
                <option value="#">Semi-nuevo 2</option>
                <option value="#">Usado 3</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="provider" class="form-label">Seleccione un Tipo de bien</label>
            <select class="form-select" id="provider" name="provider">
                <option value="#">Seleccione una opción</option>
                <option value="#">Tipo de bien 1</option>
                <option value="#">Tipo de bien 2</option>
                <option value="#">Tipo de bien 3</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="provider" class="form-label">Seleccione una Descripción del Bien</label>
            <select class="form-select" id="provider" name="provider">
                <option value="#">Seleccione una opción</option>
                <option value="#">Descripción del Bien 1</option>
                <option value="#">Descripción del Bien 2</option>
                <option value="#">Descripción del Bien 3</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-5 mb-5">Registrar</button>
    </form>
</div>



@endsection