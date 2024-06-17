@extends('layouts.plantilla')

@section('title', 'Crear Usuario')

@section('content')


    <div class="container mt-5 bg-body-secondary p-4 text-center">
        <h2 class="p-4">Registro de Usuario</h2>

        <div class="row align-items-start p-2">
            <div class="form-group row">
                <label for="nombres" class="col-sm-2 col-form-label text-right">Nombre(s):</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nombres" placeholder="Ingresa tu nombre" required>
                </div>

                <label for="apellidos" class="col-sm-2 col-form-label">Apellidos:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="apellidos" placeholder="Ingresa tu nombre" required>
                </div>
            </div>
        </div>

        <div class="row align-items-start p-2">
            <div class="form-group row">
                <label for="Usuario" class="col-sm-2 col-form-label text-right">Usuario:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="Usuario" placeholder="Ingresa tu usuario" required>
                </div>

                <label for="Correo Electrónico" class="col-sm-2 col-form-label">Correo electrónico:</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="Correo Electrónico" placeholder="Ingresa tu nombre" required>
                </div>
            </div>
        </div>

        <div class="row align-items-start p-2">
            <div class="form-group row">
                <label for="contrasena" class="col-sm-2 col-form-label text-right">Contraseña:</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu Contraseña" required>
                </div>

                <label for="ConfirmacionContrasena" class="col-sm-2 col-form-label">Confirmación de contraseña:</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="ConfirmacionContrasena" placeholder="Confirmación de contraseña" required>
                </div>
            </div>
        </div>

        
        <button type="submit" class="btn btn-warning navbar-color-personalizado text-white">Registrarse</button>

    </div>




@endsection
