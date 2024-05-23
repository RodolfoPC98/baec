@extends('layouts.plantilla')

@section('title', 'Crear Usuario')

@section('content')
    <article class="panel is-danger">
        <p class="panel-heading">Registro de usuario</p>
        <br>
        <div class="columns is-mobile is-centered is-three-fifths">
            <div class="field">
                <label class="label">Usuario</label>
                <div class="control">
                    <input name="user" class="input" type="text" placeholder="Ingrese su usuario...">
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Nombre(s)</label>
            <div class="control">
                <input name="nombre" class="input" type="text" placeholder="Ingrese su nombre...">
            </div>
        </div>
        <div class="field">
            <label class="label">Apellidos</label>
            <div class="control">
                <input name="apellidos" class="input" type="text" placeholder="Ingrese sus apellidos...">
            </div>
        </div>
        <div class="field">
            <label class="label">Teléfono</label>
            <div class="control">
                <input name="telefono" class="input" type="number" placeholder="Ingrese su teléfono...">
            </div>
        </div>

        <div class="field">
            <label class="label">Correo</label>
            <div class="control">
                <input name="correo" class="input" type="email" placeholder="Introduce tu correo...">
            </div>
        </div>

        <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
                <input name="password" class="input" type="password" placeholder="Introduce tu contraseña...">
            </div>
        </div>

        <div class="field">
            <label class="label">Tipo de usuario</label>
            <div class="control">
                <div class="select">
                    <select name="tipo_usuario">
                        <option value="admin">Admin</option>
                        <option value="empleado">Empleado</option>
                        <option value="mantenimiento">Mantenimiento</option>
                        <option value="lectura">Solo Lectura</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field" hidden>
            <label class="label">Estado</label>
            <div class="control">
                <input name="estado" class="input" type="number" value="1" min="0" max="1">
            </div>
        </div>


        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-warning">Crear Usuario</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Cancel</button>
            </div>
        </div>

    </article>
@endsection
