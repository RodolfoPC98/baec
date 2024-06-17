@extends('layouts.plantilla')

@section('title', 'Responsables')

@section('content')





    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid justify-content-end">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" autofocus>
                    Agregar Responsable
                </button>
        </div>
    </nav>




    <div class="container mt-5 table-responsive">
        <h2>Listado de Responsables/Resguardatarios</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>N</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono(s)</th>
                    <th>Correo</th>
                    <th>Fecha de creación</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody>
                @php ($index = 1)
                @foreach ($responsables as $responsable)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $responsable->nombre ? $responsable->nombre : __('s/n') }}</td>
                        <td>{{ $responsable->apellidos ? $responsable->apellidos : __('s/n') }}</td>
                        <td>{{ $responsable->telefono ? $responsable->telefono : __('s/n') }}</td>
                        <td>{{ $responsable->correo ? $responsable->correo : __('s/n') }}</td>
                        <td>{{ $responsable->created_at }}</td>
                        <td>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                data-id="{{ $responsable->id }}"
                                data-n="{{ $index }}"
                                data-nombre="{{ $responsable->nombre }}"
                                data-apellidos="{{ $responsable->apellidos }}"
                                data-telefono="{{ $responsable->telefono }}"
                                data-correo="{{ $responsable->correo }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                data-id="{{ $responsable->id }}">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresa Responsable</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_responsables') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Ingrese Nombre: </label>
                                <input name="nombre" type="text" class="form-control" id="nombre"
                                    placeholder="Nombre ...">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Ingrese Apellidos: </label>
                                <input name="apellidos" type="text" class="form-control" id="apellidos"
                                    placeholder="Apellidos ...">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Ingrese Teléfono: </label>
                                <input name="telefono" type="text" class="form-control" id="telefono"
                                    placeholder="Teléfono ...">
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Ingrese Correo: </label>
                                <input name="correo" type="correo" class="form-control" id="correo"
                                    placeholder="Correo ...">
                            </div>

                            <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn text-white"
                                style="background-color: #692E42; border-radius: 30px;" value="Agregar Responsable">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualiza Datos de Responsable</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_responsables') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">N</label>
                                <input name="id" type="text" class="form-control" id="inputId" hidden>
                                <input type="text" class="form-control" id="inputN" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="inputNombre">Nombre</label>
                                <input name='nombre' type="text" class="form-control" id="inputNombre"
                                    placeholder="Nombre ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputApellidos">Apellidos</label>
                                <input name='apellidos' type="text" class="form-control" id="inputApellidos"
                                    placeholder="Apellidos ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputTelefono">Teléfono</label>
                                <input name='telefono' type="text" class="form-control" id="inputTelefono"
                                    placeholder="Teléfono ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputCorreo">Correo</label>
                                <input name='correo' type="text" class="form-control" id="inputCorreo"
                                    placeholder="Correo ...">
                            </div>

                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;"
                                    value="Actualizar Responsable">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Datos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('eliminar_responsables') }}" method="POST">
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
                    modal.querySelector('#inputNombre').value = button.getAttribute('data-nombre');
                    modal.querySelector('#inputApellidos').value = button.getAttribute('data-apellidos');
                    modal.querySelector('#inputTelefono').value = button.getAttribute('data-telefono');
                    modal.querySelector('#inputCorreo').value = button.getAttribute('data-correo');
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
