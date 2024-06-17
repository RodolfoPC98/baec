@extends('layouts.plantilla')

@section('title', 'Proveedores')

@section('content')





    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid justify-content-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" autofocus>
                Agregar Proveedor
            </button>
        </div>
    </nav>




    <div class="container mt-5 table-responsive">
        <h2>Listado de Proveedores</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>N</th>
                    <th>RFC de la Empresa</th>
                    <th>Nombre de la Empresa</th>
                    <th>Nombre de contacto</th>
                    <th>Correo de contacto</th>
                    <th>Teléfono de contacto</th>
                    <th>Fecha de creación</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody>

                @php($index = 1)
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $proveedor->rfc ? $proveedor->rfc : __('s/n') }}</td>
                        <td>{{ $proveedor->nombre ? $proveedor->nombre : __('s/n') }}</td>
                        <td>{{ $proveedor->contacto_nombre_completo ? $proveedor->contacto_nombre_completo : __('s/n') }}
                        </td>
                        <td>{{ $proveedor->contacto_correo ? $proveedor->contacto_correo : __('s/n') }}</td>
                        <td>{{ $proveedor->contacto_telefono ? $proveedor->contacto_telefono : __('s/n') }}</td>
                        <td>{{ $proveedor->created_at }}</td>
                        <td>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                data-id="{{ $proveedor->id }}" data-n="{{ $index }}"
                                data-contacto_nombre_completo="{{ $proveedor->contacto_nombre_completo }}"
                                data-contacto_cp="{{ $proveedor->contacto_cp }}"
                                data-contacto_correo="{{ $proveedor->contacto_correo }}"
                                data-contacto_telefono="{{ $proveedor->contacto_telefono }}"
                                data-nombre="{{ $proveedor->nombre }}" data-ubicacion="{{ $proveedor->ubicacion }}"
                                data-n_identificacion="{{ $proveedor->n_identificacion }}"
                                data-tipo_negocio="{{ $proveedor->tipo_negocio }}" data-rfc="{{ $proveedor->rfc }}"
                                data-correo="{{ $proveedor->correo }}" data-telefono="{{ $proveedor->telefono }}"
                                data-padron="{{ $proveedor->padron }}" data-razon_social="{{ $proveedor->razon_social }}"
                                data-apoderado_legal="{{ $proveedor->apoderado_legal }}"
                                data-giro="{{ $proveedor->giro }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                data-id="{{ $proveedor->id }}">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar Proveedor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_proveedores') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <h5><b>Datos de Contacto</b></h5>
                            <div class="mb-3">
                                <label for="contacto_nombre_completo" class="form-label">Ingresar Nombre de Contacto:
                                </label>
                                <input name="contacto_nombre_completo" type="text" class="form-control"
                                    id="contacto_nombre_completo" placeholder="Nombre de contacto ...">
                            </div>
                            <div class="mb-3">
                                <label for="contacto_cp" class="form-label">Ingresar Código Postal de Contacto: </label>
                                <input name="contacto_cp" type="text" class="form-control" id="contacto_cp"
                                    placeholder="Código postal de contacto ...">
                            </div>
                            <div class="mb-3">
                                <label for="contacto_correo" class="form-label">Ingresar Correo de Contacto: </label>
                                <input name="contacto_correo" type="text" class="form-control" id="contacto_correo"
                                    placeholder="Correo de contacto ...">
                            </div>
                            <div class="mb-3">
                                <label for="contacto_telefono" class="form-label">Ingresar teléfono(s) de Contacto: </label>
                                <input name="contacto_telefono" type="text" class="form-control" id="contacto_telefono"
                                    placeholder="Teléfono(s) de contacto ...">
                            </div>

                            <br>
                            <hr>
                            <h5><b>Datos de Proveedor</b></h5>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Ingresar Nombre de Empresa: </label>
                                <input name="nombre" type="text" class="form-control" id="nombre"
                                    placeholder="Nombre de contacto ...">
                            </div>
                            <div class="mb-3">
                                <label for="ubicacion" class="form-label">Ingresar Ubicación de Empresa: </label>
                                <input name="ubicacion" type="text" class="form-control" id="ubicacion"
                                    placeholder="Ubicación de Empresa ...">
                            </div>
                            <div class="mb-3">
                                <label for="n_identificacion" class="form-label">Ingresar Número de Identificación Fiscal:
                                </label>
                                <input name="n_identificacion" type="text" class="form-control" id="n_identificacion"
                                    placeholder="Número de Identificación Fiscal (NIT) ...">
                            </div>
                            <div class="mb-3">
                                <label for="tipo_negocio" class="form-label">Ingresar Tipo Negocio: </label>
                                <input name="tipo_negocio" type="text" class="form-control" id="tipo_negocio"
                                    placeholder="Tipo Negocio ...">
                            </div>
                            <div class="mb-3">
                                <label for="rfc" class="form-label">Ingresar RFC: </label>
                                <input name="rfc" type="text" class="form-control" id="rfc"
                                    placeholder="RFC ...">
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Ingresar Correo de Empresa: </label>
                                <input name="correo" type="text" class="form-control" id="correo"
                                    placeholder="Correo ...">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Ingresar Teléfono(s) de Empresa: </label>
                                <input name="telefono" type="text" class="form-control" id="telefono"
                                    placeholder="Teléfono(s) de Empresa ...">
                            </div>
                            <div class="mb-3">
                                <label for="padron" class="form-label">Ingresar Padrón de Proveedores del Estado:
                                </label>
                                <input name="padron" type="text" class="form-control" id="padron"
                                    placeholder="Padrón de Proveedores del Estado ...">
                            </div>
                            <div class="mb-3">
                                <label for="razon_social" class="form-label">Ingresar Razón Social: </label>
                                <input name="razon_social" type="text" class="form-control" id="razon_social"
                                    placeholder="Tipo Negocio ...">
                            </div>
                            <div class="mb-3">
                                <label for="apoderado_legal" class="form-label">Ingresar Apoderado Legal: </label>
                                <input name="apoderado_legal" type="text" class="form-control" id="apoderado_legal"
                                    placeholder="Apoderado Legal ...">
                            </div>
                            <div class="mb-3">
                                <label for="giro" class="form-label">Ingresar Giro de la Empresa: </label>
                                <input name="giro" type="text" class="form-control" id="giro"
                                    placeholder="Giro de la Empresa ...">
                            </div>


                            <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn text-white"
                                style="background-color: #692E42; border-radius: 30px;" value="Agregar Proveedor">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos de Proveedor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_proveedores') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">N</label>
                                <input name="id" type="text" class="form-control" id="inputId" hidden>
                                <input type="text" class="form-control" id="inputN" readonly>
                            </div>
                            <br>
                            <h5><b>Datos de Contacto</b></h5>
                            <div class="mb-3">
                                <label for="input-contacto_nombre_completo" class="form-label">Ingresar Nombre de
                                    Contacto: </label>
                                <input name="contacto_nombre_completo" type="text" class="form-control"
                                    id="input-contacto_nombre_completo" placeholder="Nombre de contacto ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-contacto_cp" class="form-label">Ingresar Código Postal de Contacto:
                                </label>
                                <input name="contacto_cp" type="text" class="form-control" id="input-contacto_cp"
                                    placeholder="Código postal de contacto ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-contacto_correo" class="form-label">Ingresar Correo de Contacto:
                                </label>
                                <input name="contacto_correo" type="text" class="form-control"
                                    id="input-contacto_correo" placeholder="Correo de contacto ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-contacto_telefono" class="form-label">Ingresar teléfono(s) de Contacto:
                                </label>
                                <input name="contacto_telefono" type="text" class="form-control"
                                    id="input-contacto_telefono" placeholder="Teléfono(s) de contacto ...">
                            </div>

                            <br>
                            <hr>
                            <h5><b>Datos de Proveedor</b></h5>
                            <div class="mb-3">
                                <label for="input-nombre" class="form-label">Ingresar Nombre de Empresa: </label>
                                <input name="nombre" type="text" class="form-control" id="input-nombre"
                                    placeholder="Nombre de contacto ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-ubicacion" class="form-label">Ingresar Ubicación de Empresa: </label>
                                <input name="ubicacion" type="text" class="form-control" id="input-ubicacion"
                                    placeholder="Ubicación de Empresa ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-n_identificacion" class="form-label">Ingresar Número de Identificación
                                    Fiscal: </label>
                                <input name="n_identificacion" type="text" class="form-control"
                                    id="input-n_identificacion" placeholder="Número de Identificación Fiscal (NIT) ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-tipo_negocio" class="form-label">Ingresar Tipo Negocio: </label>
                                <input name="tipo_negocio" type="text" class="form-control" id="input-tipo_negocio"
                                    placeholder="Tipo Negocio ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-rfc" class="form-label">Ingresar RFC: </label>
                                <input name="rfc" type="text" class="form-control" id="input-rfc"
                                    placeholder="RFC ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-correo" class="form-label">Ingresar Correo de Empresa: </label>
                                <input name="correo" type="text" class="form-control" id="input-correo"
                                    placeholder="Correo ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-telefono" class="form-label">Ingresar Teléfono(s) de Empresa: </label>
                                <input name="telefono" type="text" class="form-control" id="input-telefono"
                                    placeholder="Teléfono(s) de Empresa ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-padron" class="form-label">Ingresar Padrón de Proveedores del Estado:
                                </label>
                                <input name="padron" type="text" class="form-control" id="input-padron"
                                    placeholder="Padrón de Proveedores del Estado ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-razon_social" class="form-label">Ingresar Razón Social: </label>
                                <input name="razon_social" type="text" class="form-control" id="input-razon_social"
                                    placeholder="Tipo Negocio ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-apoderado_legal" class="form-label">Ingresar Apoderado Legal: </label>
                                <input name="apoderado_legal" type="text" class="form-control"
                                    id="input-apoderado_legal" placeholder="Apoderado Legal ...">
                            </div>
                            <div class="mb-3">
                                <label for="input-giro" class="form-label">Ingresar Giro de la Empresa: </label>
                                <input name="giro" type="text" class="form-control" id="input-giro"
                                    placeholder="Giro de la Empresa ...">
                            </div>

                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;" value="Actualizar Proveedor">
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
                    <form action="{{ route('eliminar_proveedores') }}" method="POST">
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
                    // Extrae la información de los atributos data-*

                    // Encuentra los elementos input dentro del modal y asigna los valores
                    var modal = exampleModal2;

                    modal.querySelector('#inputId').value = button.getAttribute('data-id');
                    modal.querySelector('#inputN').value = (button.getAttribute('data-n'));
                    modal.querySelector('#input-contacto_nombre_completo').value = button.getAttribute(
                        'data-contacto_nombre_completo');
                    modal.querySelector('#input-contacto_cp').value = button.getAttribute('data-contacto_cp');
                    modal.querySelector('#input-contacto_correo').value = button.getAttribute(
                        'data-contacto_correo');
                    modal.querySelector('#input-contacto_telefono').value = button.getAttribute(
                        'data-contacto_telefono');
                    modal.querySelector('#input-nombre').value = button.getAttribute('data-nombre');
                    modal.querySelector('#input-ubicacion').value = button.getAttribute('data-ubicacion');
                    modal.querySelector('#input-n_identificacion').value = button.getAttribute(
                        'data-n_identificacion');
                    modal.querySelector('#input-tipo_negocio').value = button.getAttribute('data-tipo_negocio');
                    modal.querySelector('#input-rfc').value = button.getAttribute('data-rfc');
                    modal.querySelector('#input-correo').value = button.getAttribute('data-correo');
                    modal.querySelector('#input-telefono').value = button.getAttribute('data-telefono');
                    modal.querySelector('#input-padron').value = button.getAttribute('data-padron');
                    modal.querySelector('#input-razon_social').value = button.getAttribute('data-razon_social');
                    modal.querySelector('#input-apoderado_legal').value = button.getAttribute(
                        'data-apoderado_legal');
                    modal.querySelector('#input-giro').value = button.getAttribute('data-giro');

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
                    // Extrae la información de los atributos data
                    // Encuentra los elementos input dentro del modal y asigna los valores
                    var modal = exampleModal3;

                    modal.querySelector('#inputId').value = button.getAttribute('data-id');
                });
            });
        </script>






    @endsection
