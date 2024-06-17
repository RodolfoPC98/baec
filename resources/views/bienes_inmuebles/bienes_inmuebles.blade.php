@extends('layouts.plantilla')

@section('title', 'Bienes Inmuebles')

@section('content')





    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-end">


                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar Bien Inmueble
                </button>
            </div>
        </div>
    </nav>







    <div class="container mt-5 table-responsive">
        <h2>Listado de Bienes Inmuebles</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Calle</th>
                    <th>Número</th>
                    <th>Colonia</th>
                    <th>Localidad</th>
                    <th>Estado</th>
                    <th>Teléfono</th>
                    <th>Predio</th>
                    <th>Edificio</th>
                    <th>U. Administrativa</th>
                    <th>Monto Histórico</th>
                    <th>created_at</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($bienes_inmueble as $bien_inmueble)
                    <tr>
                        <td>{{ $bien_inmueble->id }}</td>
                        <td>{{ $bien_inmueble->calle }}</td>
                        <td>{{ $bien_inmueble->numero ? $bien_inmueble->numero : __('s/n') }}</td>
                        <td>{{ $bien_inmueble->colonia }}</td>
                        <td>{{ $bien_inmueble->localidad }}</td>
                        <td>{{ $bien_inmueble->entidad_federativa }}</td>
                        <td>{{ $bien_inmueble->telefono }}</td>
                        <td>{{ $bien_inmueble->predio }}</td>
                        <td>{{ $bien_inmueble->edificio }}</td>
                        <td>{{ $bien_inmueble->unidad_administrativa }}</td>
                        <td>{{ $bien_inmueble->monto_historico }}</td>
                        <td>{{ $bien_inmueble->created_at }}</td>
                        <td>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                data-id="{{ $bien_inmueble->id }}" data-calle="{{ $bien_inmueble->calle }}"
                                data-numero="{{ $bien_inmueble->numero }}" data-colonia="{{ $bien_inmueble->colonia }}"
                                data-localidad="{{ $bien_inmueble->localidad }}"
                                data-entidad_federativa="{{ $bien_inmueble->entidad_federativa }}"
                                data-telefono="{{ $bien_inmueble->telefono }}" data-predio="{{ $bien_inmueble->predio }}"
                                data-edificio="{{ $bien_inmueble->edificio }}"
                                data-unidad_administrativa="{{ $bien_inmueble->unidad_administrativa }}"
                                data-monto_historico="{{ $bien_inmueble->monto_historico }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                data-id="{{ $bien_inmueble->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>









        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresa Nuevo Bien Inmueble</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('crear_bien_inmueble') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="calle">Calle</label>
                                <input name='calle' type="text" class="form-control" id="calle"
                                    placeholder="Calle">
                            </div>
                            <div class="mb-3">
                                <label for="numero">Número</label>
                                <input name='numero' type="number" class="form-control" id="numero"
                                    placeholder="Número">
                            </div>
                            <div class="mb-3">
                                <label for="colonia">Colonia</label>
                                <input name='colonia' type="text" class="form-control" id="colonia"
                                    placeholder="Colonia">
                            </div>

                            <div class="mb-3">
                                <label for="localidad">Localidad</label>
                                <input name='localidad' type="text" class="form-control" id="localidad"
                                    placeholder="Localidad">
                            </div>
                            <div class="mb-3">
                                <label for="entidad">Entidad Federativa</label>
                                <input name='entidad' type="text" class="form-control" id="entidad"
                                    placeholder="Entidad Federativa">
                            </div>

                            <div class="mb-3">
                                <label for="telefono">Teléfono</label>
                                <input name='telefono' type="text" class="form-control" id="telefono"
                                    placeholder="Teléfono">
                            </div>
                            <div class="mb-3">
                                <label for="predio">Predio</label>
                                <input name='predio' type="text" class="form-control" id="predio"
                                    placeholder="Predio">
                            </div>

                            <div class="mb-3">
                                <label for="edificio">Edificio</label>
                                <input name='edificio' type="text" class="form-control" id="edificio"
                                    placeholder="Edificio">
                            </div>
                            <div class="mb-3">
                                <label for="unidad_administrativa">Unidad Administrativa</label>
                                <input name='unidad_administrativa' type="text" class="form-control"
                                    id="unidad_administrativa" placeholder="Unidad Administrativa">
                            </div>

                            <div class="mb-3">
                                <label for="monto_historico">Monto Histórico</label>
                                <input name='monto_historico' type="number" step="0.01" class="form-control"
                                    id="monto_historico" placeholder="Monto Histórico">
                            </div>

                            <br>

                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;" value="Agregar Bien Inmueble">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>







        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualiza Bien Inmueble</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('crear_bien_inmueble') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">ID</label>
                                <input name="id" type="text" class="form-control" id="inputId" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="inputCalle">Calle</label>
                                <input name='calle' type="text" class="form-control" id="inputCalle"
                                    placeholder="Calle">
                            </div>
                            <div class="mb-3">
                                <label for="inputNumero">Número</label>
                                <input name='numero' type="number" class="form-control" id="inputNumero"
                                    placeholder="Número">
                            </div>
                            <div class="mb-3">
                                <label for="inputColonia">Colonia</label>
                                <input name='colonia' type="text" class="form-control" id="inputColonia"
                                    placeholder="Colonia">
                            </div>

                            <div class="mb-3">
                                <label for="inputLocalidad">Localidad</label>
                                <input name='localidad' type="text" class="form-control" id="inputLocalidad"
                                    placeholder="Localidad">
                            </div>
                            <div class="mb-3">
                                <label for="inputEntidad_federativa">Estado</label>
                                <input name='entidad' type="text" class="form-control" id="inputEntidad_federativa"
                                    placeholder="Estado">
                            </div>

                            <div class="mb-3">
                                <label for="inputTelefono">Teléfono</label>
                                <input name='telefono' type="text" class="form-control" id="inputTelefono"
                                    placeholder="Teléfono">
                            </div>
                            <div class="mb-3">
                                <label for="inputPredio">Predio</label>
                                <input name='predio' type="text" class="form-control" id="inputPredio"
                                    placeholder="Predio">
                            </div>

                            <div class="mb-3">
                                <label for="inputEdificio">Edificio</label>
                                <input name='edificio' type="text" class="form-control" id="inputEdificio"
                                    placeholder="Edificio">
                            </div>
                            <div class="mb-3">
                                <label for="inputUnidad_administrativa">Unidad Administrativa</label>
                                <input name='unidad_administrativa' type="text" class="form-control"
                                    id="inputUnidad_administrativa" placeholder="Unidad Administrativa">
                            </div>

                            <div class="mb-3">
                                <label for="inputMonto_historico">Monto Histórico</label>
                                <input name='monto_historico' type="number" step="0.01" class="form-control"
                                    id="inputMonto_historico" placeholder="Monto Histórico">
                            </div>

                            <br>

                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;"
                                    value="Actualizar Bien Inmueble">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Bien Inmueble</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('eliminar_bien_inmueble') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">¿Seguro que desea eliminar el bien inmueble con
                                    el siguiente ID?</label>
                                <input name="id" type="text" class="form-control" id="inputId" readonly>
                            </div>


                            <br>

                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;"
                                    value="Eliminar Bien Inmueble">
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
                    var id = button.getAttribute('data-id');
                    var calle = button.getAttribute('data-calle');
                    var numero = button.getAttribute('data-numero');
                    var colonia = button.getAttribute('data-colonia');
                    var localidad = button.getAttribute('data-localidad');
                    var entidad_federativa = button.getAttribute('data-entidad_federativa');
                    var telefono = button.getAttribute('data-telefono');
                    var predio = button.getAttribute('data-predio');
                    var edificio = button.getAttribute('data-edificio');
                    var unidad_administrativa = button.getAttribute('data-unidad_administrativa');
                    var monto_historico = button.getAttribute('data-monto_historico');

                    // Encuentra los elementos input dentro del modal y asigna los valores
                    var modal = exampleModal2;
                    var inputId = modal.querySelector('#inputId');
                    var inputCalle = modal.querySelector('#inputCalle');
                    var inputNumero = modal.querySelector('#inputNumero');
                    var inputColonia = modal.querySelector('#inputColonia');
                    var inputLocalidad = modal.querySelector('#inputLocalidad');
                    var inputEntidad_federativa = modal.querySelector('#inputEntidad_federativa');
                    var inputTelefono = modal.querySelector('#inputTelefono');
                    var inputPredio = modal.querySelector('#inputPredio');
                    var inputEdificio = modal.querySelector('#inputEdificio');
                    var inputUnidad_administrativa = modal.querySelector('#inputUnidad_administrativa');
                    var inputMonto_historico = modal.querySelector('#inputMonto_historico');

                    inputId.value = id;
                    inputCalle.value = calle;
                    inputNumero.value = numero;
                    inputColonia.value = colonia;
                    inputLocalidad.value = localidad;
                    inputEntidad_federativa.value = entidad_federativa;
                    inputTelefono.value = telefono;
                    inputPredio.value = predio;
                    inputEdificio.value = edificio;
                    inputUnidad_administrativa.value = unidad_administrativa;
                    inputMonto_historico.value = monto_historico;
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
                    var id = button.getAttribute('data-id');

                    // Encuentra los elementos input dentro del modal y asigna los valores
                    var modal = exampleModal3;
                    var inputId = modal.querySelector('#inputId');

                    inputId.value = id;
                });
            });
        </script>







    @endsection
