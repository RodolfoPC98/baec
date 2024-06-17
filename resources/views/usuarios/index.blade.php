@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')




    <div class="container mt-5">
        <h2>Tabla Básica</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>juan@example.com</td>
                    <td>123-456-7890</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>María Gómez</td>
                    <td>maria@example.com</td>
                    <td>098-765-4321</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Carlos Sánchez</td>
                    <td>carlos@example.com</td>
                    <td>555-555-5555</td>
                </tr>
            </tbody>
        </table>
    </div>




@endsection
