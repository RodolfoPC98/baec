@extends('layouts.plantilla')

@section('title', 'Ubicaciones')

@section('content')





    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid justify-content-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Ubicación
            </button>
        </div>
    </nav>




    <div class="container mt-5 table-responsive">
        <h2>Listado de Ubicaciones</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>N</th>
                    <th>Área</th>
                    <th>Edificio</th>
                    <th>Fecha de creación</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody>
                @php($index = 1)
                @foreach ($ubicaciones as $ubicacion)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $ubicacion->nombre ? $ubicacion->nombre : __('s/n') }}</td>
                        <td>{{ $ubicacion->edificio ? $ubicacion->edificio : __('s/n') }}</td>
                        <td>{{ $ubicacion->created_at }}</td>
                        <td>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                data-id="{{ $ubicacion->id }}" data-n="{{ $index }}"
                                data-nombre="{{ $ubicacion->nombre }}" data-edificio="{{ $ubicacion->edificio }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                data-id="{{ $ubicacion->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                        @php($index++)
                    </tr>
                @endforeach
            </tbody>
        </table>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresa Ubicación</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_ubicaciones') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Ingrese área: </label>
                                <input name="nombre" type="text" class="form-control" id="nombre"
                                    placeholder="Área ...">
                            </div>
                            <div class="mb-3">
                                <label for="edificio" class="form-label">Ingrese edificio: </label>
                                <input name="edificio" type="text" class="form-control" id="edificio"
                                    placeholder="Edificio ...">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualiza Datos de Ubicación</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_ubicaciones') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">N</label>
                                <input name="id" type="text" class="form-control" id="inputId" hidden>
                                <input type="text" class="form-control" id="inputN" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="inputNombre">Área</label>
                                <input name='nombre' type="text" class="form-control" id="inputNombre"
                                    placeholder="Área ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputEdificio">Edificio</label>
                                <input name='edificio' type="text" class="form-control" id="inputEdificio"
                                    placeholder="Edificio ...">
                            </div>

                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;" value="Actualizar Ubicación">
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
                    <form action="{{ route('eliminar_ubicaciones') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">¿Seguro que desea eliminar los datos del
                                    registro?</label>
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
                    // Extrae la información de los atributos data-
                    // Encuentra los elementos input dentro del modal y asigna los valores
                    var modal = exampleModal2;

                    modal.querySelector('#inputId');.value = button.getAttribute('data-id');
                    modal.querySelector('#inputN').value = button.getAttribute('data-n');
                    modal.querySelector('#inputNombre').value = button.getAttribute('data-nombre');
                    modal.querySelector('#inputEdificio').value = button.getAttribute('data-edificio');
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
                    var modal = exampleModal3

                    modal.querySelector('#inputId').value = button.getAttribute('data-id');
                });
            });
        </script>






    @endsection
