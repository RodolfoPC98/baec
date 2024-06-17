@extends('layouts.plantilla')

@section('title', 'Bienes')

@section('content')

<div class="container mt-5">
    <form action="#" method="GET" class="d-flex">
        <input class="form-control me-2" type="search" name="query" placeholder="Ingrese nombre o usuario a buscar..." aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</div>

<div class="container mt-5 table-responsive">
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