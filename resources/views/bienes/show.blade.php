@extends('layouts.plantilla')

@section('title', 'Bienes')

@section('content')

<div class="container mt-5 table-responsive">
    <form action="#" method="GET" class="d-flex">
        <input class="form-control me-2" type="search" name="query" placeholder="Ingrese nombre o usuario a buscar..." aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</div>

<div class="container mt-5">
    <h2 class="mb-4">Lista de Bienes</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Status</th>
                <th>Proveedor</th>
                <th>Factura</th>
                <th>Fecha</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bien 1</td>
                <td>Descripción del Bien 1</td>
                <td>Disponible</td>
                <td>Proveedor A</td>
                <td>123456</td>
                <td>2024-01-01</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bien 2</td>
                <td>Descripción del Bien 2</td>
                <td>No Disponible</td>
                <td>Proveedor B</td>
                <td>123457</td>
                <td>2024-01-02</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bien 3</td>
                <td>Descripción del Bien 3</td>
                <td>Disponible</td>
                <td>Proveedor C</td>
                <td>123458</td>
                <td>2024-01-03</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bien 4</td>
                <td>Descripción del Bien 4</td>
                <td>No Disponible</td>
                <td>Proveedor D</td>
                <td>123459</td>
                <td>2024-01-04</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Bien 5</td>
                <td>Descripción del Bien 5</td>
                <td>Disponible</td>
                <td>Proveedor E</td>
                <td>123460</td>
                <td>2024-01-05</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Bien 6</td>
                <td>Descripción del Bien 6</td>
                <td>No Disponible</td>
                <td>Proveedor F</td>
                <td>123461</td>
                <td>2024-01-06</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Bien 7</td>
                <td>Descripción del Bien 7</td>
                <td>Disponible</td>
                <td>Proveedor G</td>
                <td>123462</td>
                <td>2024-01-07</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Bien 8</td>
                <td>Descripción del Bien 8</td>
                <td>No Disponible</td>
                <td>Proveedor H</td>
                <td>123463</td>
                <td>2024-01-08</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Bien 9</td>
                <td>Descripción del Bien 9</td>
                <td>Disponible</td>
                <td>Proveedor I</td>
                <td>123464</td>
                <td>2024-01-09</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Bien 10</td>
                <td>Descripción del Bien 10</td>
                <td>No Disponible</td>
                <td>Proveedor J</td>
                <td>123465</td>
                <td>2024-01-10</td>
                <td>
                    <a href="{{ url('bienes/create') }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>



    <nav aria-label="...">
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