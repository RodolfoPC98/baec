@extends('layouts.plantilla')

@section('title', 'Bienes')

@section('content')



    <div class="container mt-5">
        <form action="#" method="GET" class="d-flex">
            <input class="form-control me-2" type="search" name="query" placeholder="Ingrese nombre o usuario a buscar..."
                aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>



    <div class="container mt-5">
        <h2>Tabla Básica</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>juan@example.com</td>
                    <td>123-456-7890</td>
                    <td>
                        <a href="{{ url('usuarios/create') }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>María Gómez</td>
                    <td>maria@example.com</td>
                    <td>098-765-4321</td>
                    <td>
                        <a href="{{ url('usuarios/create') }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Carlos Sánchez</td>
                    <td>carlos@example.com</td>
                    <td>555-555-4729</td>
                    <td>
                        <a href="{{ url('usuarios/create') }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Roberto Sánchez</td>
                    <td>roberto@example.com</td>
                    <td>555-555-0987</td>
                    <td>
                        <a href="{{ url('usuarios/create') }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Carlos Lara</td>
                    <td>carlosLara@example.com</td>
                    <td>555-555-3134</td>
                    <td>
                        <a href="{{ url('usuarios/create') }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Manuel Ramirez</td>
                    <td>m.ramirez@example.com</td>
                    <td>555-555-6543</td>
                    <td>
                        <a href="{{ url('usuarios/create') }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Diana Paola</td>
                    <td>carlos@example.com</td>
                    <td>555-555-1234</td>
                    <td>
                        <a href="{{ url('usuarios/create') }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Camila Perez</td>
                    <td>CPerez@example.com</td>
                    <td>555-555-8765</td>
                    <td>
                        <a href="{{ url('usuarios/create') }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <nav class="mt-5" aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>




@endsection
