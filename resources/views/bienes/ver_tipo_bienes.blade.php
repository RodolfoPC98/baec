@extends('layouts.plantilla')

@section('title', 'Ver Tipo de Bienes')

@section('content')


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid justify-content-end">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar Tipo de Bien
                </button>
        </div>
    </nav>




    <div class="container mt-5 table-responsive">
        <h2>Listado de Tipos de Bienes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>N</th>
                    <th>Descripción</th>
                    <th>Fecha de creación</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody>
                @php ($index = 1)
                @foreach ($tipo_biens as $tipo_bien)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $tipo_bien->descripcion }}</td>
                        <td>{{ $tipo_bien->created_at }}</td>
                        <td>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                data-id="{{ $tipo_bien->id }}" 
                                data-n="{{ $index }}"
                                data-tipo_bien="{{ $tipo_bien->descripcion }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                data-id="{{ $tipo_bien->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                        @php ($index++)
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br><br>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresa tipo bien</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_tipo_bien') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Ingrese nuevo tipo de bien: </label>
                                <input name="descripcion" type="text" class="form-control" id="descripcion"
                                    placeholder="Tipo Bien ...">
                            </div>
                            <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn text-white"
                                style="background-color: #692E42; border-radius: 30px;" value="Agregar Tipo">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualiza Tipo de Bien</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_tipo_bien') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">N</label>
                                <input name="id" type="text" class="form-control" id="inputId" hidden>
                                <input type="text" class="form-control" id="inputN" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="inputTipoBien">Tipo Bien</label>
                                <input name='descripcion' type="text" class="form-control" id="inputTipoBien"
                                    placeholder="Tipo de bien">
                            </div>

                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;"
                                    value="Actualizar Tipo Bien">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Tipo de Bien</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('eliminar_tipo_bien') }}" method="POST">
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
                    modal.querySelector('#inputTipoBien').value = button.getAttribute('data-tipo_bien');
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
