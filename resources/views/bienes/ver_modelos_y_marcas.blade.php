@extends('layouts.plantilla')

@section('title', 'Modelos y Marcas')

@section('content')





    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid justify-content-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Modelo y Marca
            </button>
        </div>
    </nav>




    <div class="container mt-5 table-responsive">
        <h2>Listado de Modelos y Marcas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>N</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Serie</th>
                    <th>Fecha de creación</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody>
                @php ($index = 1)
                @foreach ($modelos as $modelo)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $modelo->marca ? $modelo->marca : __('s/n') }}</td>
                        <td>{{ $modelo->nombre ? $modelo->nombre : __('s/n') }}</td>
                        <td>{{ $modelo->serie ? $modelo->serie : __('s/n') }}</td>
                        <td>{{ $modelo->created_at }}</td>
                        <td>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                data-id="{{ $modelo->id }}"
                                data-n="{{ $index }}"
                                data-marca="{{ $modelo->marca }}"
                                data-nombre="{{ $modelo->nombre }}" 
                                data-serie="{{ $modelo->serie }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                data-id="{{ $modelo->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                        @php ($index++)
                    </tr>
                @endforeach
            </tbody>
        </table>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresa descripción bien</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_modelos_y_marcas') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="marca" class="form-label">Ingrese Marca: </label>
                                <input name="marca" type="text" class="form-control" id="marca"
                                    placeholder="Marca ...">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Ingrese modelo: </label>
                                <input name="nombre" type="text" class="form-control" id="nombre"
                                    placeholder="Modelo ...">
                            </div>
                            <div class="mb-3">
                                <label for="serie" class="form-label">Ingrese n. de serie: </label>
                                <input name="serie" type="text" class="form-control" id="serie"
                                    placeholder="Serie ...">
                            </div>

                            <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn text-white"
                                style="background-color: #692E42; border-radius: 30px;" value="Agregar Descripción">
                        </div>
                    </form>
                </div>
            </div>
        </div>






        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualiza Descripción de Bien</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_modelos_y_marcas') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">N</label>
                                <input name="id" type="text" class="form-control" id="inputId" hidden>
                                <input type="text" class="form-control" id="inputN" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="inputMarca">Marca</label>
                                <input name='marca' type="text" class="form-control" id="inputMarca"
                                    placeholder="Marca ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputNombre">Modelo</label>
                                <input name='nombre' type="text" class="form-control" id="inputNombre"
                                    placeholder="Modelo ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputSerie">N. Serie</label>
                                <input name='serie' type="text" class="form-control" id="inputSerie"
                                    placeholder="N. Serie ...">
                            </div>

                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;"
                                    value="Actualizar Descripcion Bien">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Datos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('eliminar_modelos_y_marcas') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">¿Seguro que desea eliminar los datos del registro?</label>
                                <input name="id" type="text" class="form-control" id="inputId" hidden>
                            </div>


                            <br>

                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;" value="Eliminar Datos">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






        {{-- script para Modal 2 --}}
        <script>
            // Espera a que el DOM esté completamente cargado
            document.addEventListener('DOMContentLoaded', function() {
                // Escucha el evento `show.bs.modal` del modal
                var exampleModal2 = document.getElementById('exampleModal2');
                exampleModal2.addEventListener('show.bs.modal', function(event) {
                    // Botón que activó el modal
                    var button = event.relatedTarget;

                    // Extrae la información de los atributos data-*
                    // Encuentra los elementos input dentro del modal y asigna los valores
                    var modal = exampleModal2;
                    modal.querySelector('#inputId').value = button.getAttribute('data-id');
                    modal.querySelector('#inputN').value = button.getAttribute('data-n');
                    modal.querySelector('#inputMarca').value = button.getAttribute('data-marca');
                    modal.querySelector('#inputNombre').value = button.getAttribute('data-nombre');
                    modal.querySelector('#inputSerie').value = button.getAttribute('data-serie');
                });
            });
        </script>




        {{-- script para Modal 3 --}}
        <script>
            // Espera a que el DOM esté completamente cargado
            document.addEventListener('DOMContentLoaded', function() {
                // Escucha el evento `show.bs.modal` del modal
                var exampleModal3 = document.getElementById('exampleModal3');
                exampleModal3.addEventListener('show.bs.modal', function(event) {
                    // Botón que activó el modal
                    var button = event.relatedTarget;

                    // Extrae la información de los atributos data-*
                    // Encuentra los elementos input dentro del modal y asigna los valores
                    var modal = exampleModal3;

                    modal.querySelector('#inputId').value = button.getAttribute('data-id');
                });
            });
        </script>






    @endsection
