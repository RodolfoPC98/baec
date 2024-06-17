@extends('layouts.plantilla')

@section('title', 'Bienes Computadoras')

@section('content')





    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid justify-content-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Bien
            </button>
        </div>
    </nav>




    <div class="container mt-5 table-responsive">
        <h2>Listado de Bienes de Descripción Computadora</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>N</th>
                    <th>N. Inventario</th>
                    <th>Nombre Bien</th>
                    <th>Tipo Bien</th>
                    <th>Descripción Bien</th>
                    <th>Responsable</th>
                    <th>Proveedor</th>
                    <th>Fecha de creación</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody>

                @php($index = 1)
                @foreach ($bienes as $bien)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ isset($bien->n_inventario) ? $bien->n_inventario : __('s/n') }}</td>
                        <td>{{ isset($bien->nombre_bien) ? $bien->nombre_bien : __('s/n') }}</td>
                        <td>{{ isset($bien->tipo_bien->descripcion) ? $bien->tipo_bien->descripcion : __('s/n') }}</td>
                        <td>{{ isset($bien->descripcion_bien->descripcion) ? $bien->descripcion_bien->descripcion : __('s/n') }}
                        </td>
                        <td>{!! isset($bien->responsable->nombre)
                            ? '<strong>Nombre:</strong> ' .
                                $bien->responsable->nombre .
                                ' ' .
                                $bien->responsable->apellidos .
                                '<br><strong>Correo:</strong> ' .
                                $bien->responsable->correo .
                                '<br><strong>Teléfono:</strong> ' .
                                $bien->responsable->telefono
                            : __('s/n') !!}</td>
                        <td>{{ isset($bien->proveedor->nombre) ? $bien->proveedor->nombre : __('s/n') }}</td>
                        <td>{{ $bien->created_at }}</td>
                        <td>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                data-id="{{ $bien->id }}" data-n="{{ $index }}"
                                data-nombre_bien="{{ $bien->nombre_bien }}"
                                data-costo_producto="{{ $bien->costo_producto }}"
                                data-n_inventario="{{ $bien->n_inventario }}" data-factura="{{ $bien->factura }}"
                                data-fecha_factura="{{ $bien->fecha_factura }}" data-estado_id="{{ $bien->estado_id }}"
                                data-tipo_bien_id="{{ $bien->tipo_bien_id }}"
                                data-descripcion_bien_id="{{ $bien->descripcion_bien_id }}"
                                data-modelo_id="{{ $bien->modelo_id }}" data-ubicacion_id="{{ $bien->ubicacion_id }}"
                                data-proveedor_id="{{ $bien->proveedor_id }}"
                                data-responsable_id="{{ $bien->responsable_id }}"
                                data-resguardatorio_id="{{ $bien->resguardatorio_id }}"
                                data-comentario="{{ $bien->comentario }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="m-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                data-id="{{ $bien->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                        @php($index++)
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresa Bien</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_bienes_computadoras') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre_bien" class="form-label">Ingrese Nombre del Bien: </label>
                                <input name="nombre_bien" type="text" class="form-control" id="nombre_bien"
                                    placeholder="Nombre del Bien ...">
                            </div>
                            <div class="mb-3">
                                <label for="costo_producto" class="form-label">Ingrese Costo del Producto: </label>
                                <input name="costo_producto" type="text" class="form-control" id="costo_producto"
                                    placeholder="Costo del Producto ...">
                            </div>
                            <div class="mb-3">
                                <label for="n_inventario" class="form-label">Ingrese Número de Inventario: </label>
                                <input name="n_inventario" type="text" class="form-control" id="n_inventario"
                                    placeholder="Número de inventario ...">
                            </div>
                            <div class="mb-3">
                                <label for="factura" class="form-label">Ingrese Factura: </label>
                                <input name="factura" type="text" class="form-control" id="factura"
                                    placeholder="Factura ...">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_factura" class="form-label">Ingrese Fecha de Factura: </label>
                                <input name="fecha_factura" type="date" class="form-control" id="fecha_factura"
                                    placeholder="Fecha de Factura ...">
                            </div>
                            <div class="mb-3">
                                <label for="estado_id" class="form-label">Seleccionar el estado del bien: </label>
                                <select id="estado_id" name="estado_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado->id }}">{{ $estado->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tipo_bien_id" class="form-label">Ingrese Tipo de bien: </label>
                                <select id="tipo_bien_id" name="tipo_bien_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($tipo_biens as $tipo_bien)
                                        <option value="{{ $tipo_bien->id }}">{{ $tipo_bien->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="modelo_id" class="form-label">Ingrese Marca->Modelo->Serie: </label>
                                <select id="modelo_id" name="modelo_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($modelos as $modelo)
                                        <option value="{{ $modelo->id }}">{{ $modelo->marca }} ->
                                            {{ $modelo->nombre }} -> {{ $modelo->serie }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ubicacion_id" class="form-label">Ingrese la Ubicación Área->Edificio: </label>
                                <select id="ubicacion_id" name="ubicacion_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($ubicacions as $ubicacion)
                                        <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }} ->
                                            {{ $ubicacion->edificio }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="proveedor_id" class="form-label">Introduzca Proveedor del bien: </label>
                                <select id="proveedor_id" name="proveedor_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($proveedors as $proveedor)
                                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="responsable_id" class="form-label">Ingrese el Responsable del Bien: </label>
                                <select id="responsable_id" name="responsable_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($responsables as $responsable)
                                        <option value="{{ $responsable->id }}">{{ $responsable->nombre }}
                                            {{ $responsable->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="resguardatorio_id" class="form-label">Ingrese el Resguardatario del Bien:
                                </label>
                                <select id="resguardatorio_id" name="resguardatorio_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($responsables as $responsable)
                                        <option value="{{ $responsable->id }}">{{ $responsable->nombre }}
                                            {{ $responsable->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="comentario" class="form-label">Ingrese Comentario: </label>
                                <input name="comentario" type="textTarea" class="form-control" id="comentario"
                                    placeholder="Comentario ...">
                            </div>


                            <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn text-white"
                                style="background-color: #692E42; border-radius: 30px;" value="Agregar Bien">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualiza Datos de Bien</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('agregar_bienes_computadoras') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="inputId" class="form-label">N</label>
                                <input name="id" type="text" class="form-control" id="inputId" hidden>
                                <input type="text" class="form-control" id="inputN" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="inputNombre_bien" class="form-label">Nombre del Bien: </label>
                                <input name="nombre_bien" type="text" class="form-control" id="inputNombre_bien"
                                    placeholder="Nombre del Bien ...">
                            </div>

                            <div class="mb-3">
                                <label for="inputCosto_producto" class="form-label">Ingrese Costo del Producto: </label>
                                <input name="costo_producto" type="text" class="form-control"
                                    id="inputCosto_producto" placeholder="Costo del Producto ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputN_inventario" class="form-label">Número de Inventario: </label>
                                <input name="n_inventario" type="text" class="form-control" id="inputN_inventario"
                                    placeholder="Número de inventario ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputFactura" class="form-label">Factura: </label>
                                <input name="factura" type="text" class="form-control" id="inputFactura"
                                    placeholder="Factura ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputFecha_factura" class="form-label">Fecha de Factura: </label>
                                <input name="fecha_factura" type="date" class="form-control" id="inputFecha_factura"
                                    placeholder="Fecha de Factura ...">
                            </div>
                            <div class="mb-3">
                                <label for="inputEstado_id" class="form-label">Seleccionar el estado del bien: </label>
                                <select id="inputEstado_id" name="estado_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado->id }}"
                                            {{ $estado->id == $bien->estado_id ? 'selected' : '' }}>
                                            {{ $estado->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputTipo_bien_id" class="form-label">Ingrese Tipo de bien: </label>
                                <select id="inputTipo_bien_id" name="tipo_bien_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($tipo_biens as $tipo_bien)
                                        <option value="{{ $tipo_bien->id }}"
                                            {{ $tipo_bien->id == $bien->tipo_bien_id ? 'selected' : '' }}>
                                            {{ $tipo_bien->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputDescripcion_bien_id" class="form-label">Ingrese Descripción de bien:
                                </label>
                                <select id="inputDescripcion_bien_id" name="descripcion_bien_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($descripcion_biens as $descripcion_bien)
                                        <option value="{{ $descripcion_bien->id }}"
                                            {{ $descripcion_bien->id == $bien->descripcion_bien_id ? 'selected' : '' }}>
                                            {{ $descripcion_bien->descripcion }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputModelo_id" class="form-label">Ingrese Marca->Modelo->Serie: </label>
                                <select id="inputModelo_id" name="modelo_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($modelos as $modelo)
                                        <option value="{{ $modelo->id }}"
                                            {{ $modelo->id == $bien->modelo_id ? 'selected' : '' }}>{{ $modelo->marca }}
                                            ->
                                            {{ $modelo->nombre }} -> {{ $modelo->serie }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputUbicacion_id" class="form-label">Ingrese la Ubicación Área->Edificio:
                                </label>
                                <select id="inputUbicacion_id" name="ubicacion_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($ubicacions as $ubicacion)
                                        <option value="{{ $ubicacion->id }}"
                                            {{ $ubicacion->id == $bien->ubicacion_id ? 'selected' : '' }}>
                                            {{ $ubicacion->nombre }} ->
                                            {{ $ubicacion->edificio }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputProveedor_id" class="form-label">Ingrese Proveedor del bien: </label>
                                <select id="inputProveedor_id" name="proveedor_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($proveedors as $proveedor)
                                        <option value="{{ $proveedor->id }}"
                                            {{ $ubicacion->id == $bien->ubicacion_id ? 'selected' : '' }}>
                                            {{ $proveedor->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputResponsable_id" class="form-label">Ingrese el Responsable del Bien:
                                </label>
                                <select id="inputResponsable_id" name="responsable_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($responsables as $responsable)
                                        <option
                                            value="{{ $responsable->id }}"{{ $responsable->id == $bien->responsable_id ? 'selected' : '' }}>
                                            {{ $responsable->nombre }}
                                            {{ $responsable->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputResguardatorio_id" class="form-label">Ingrese el Resguardatoroio del
                                    Bien: </label>
                                <select id="inputResguardatorio_id" name="resguardatorio_id" class="form-select"
                                    aria-label="Default select example">
                                    <option value="">Seleccione una opción..</option>
                                    @foreach ($responsables as $responsable)
                                        <option value="{{ $responsable->id }}"
                                            {{ $responsable->id == $bien->resguardatorio_id ? 'selected' : '' }}>
                                            {{ $responsable->nombre }}
                                            {{ $responsable->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputComentario" class="form-label">Ingrese Comentario: </label>
                                <input name="comentario" type="textTarea" class="form-control" id="inputComentario"
                                    placeholder="Comentario ...">
                            </div>




                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Cancelar</button>
                                <input name='' type="submit" class="btn text-white"
                                    style="background-color: #692E42; border-radius: 30px;" value="Actualizar Bien">
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
                    <form action="{{ route('eliminar_bienes_computadoras') }}" method="POST">
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

                    var fechacadena = button.getAttribute('data-fecha_factura');
                    var partes = fechacadena.split(' ');
                    var fecha_factura = partes[0];
                    // Extrae la información de los atributos data-*
                    // Encuentra los elementos input dentro del modal y asigna los valores
                    var modal = exampleModal2;
                    var inputFecha_factura = modal.querySelector('#inputFecha_factura');

                    modal.querySelector('#inputId').value = button.getAttribute('data-id');
                    modal.querySelector('#inputN').value = button.getAttribute('data-n');
                    modal.querySelector('#inputNombre_bien').value = button.getAttribute('data-nombre_bien');
                    modal.querySelector('#inputCosto_producto').value = button.getAttribute(
                        'data-costo_producto');
                    modal.querySelector('#inputN_inventario').value = button.getAttribute('data-n_inventario');
                    modal.querySelector('#inputFactura').value = button.getAttribute('data-factura');
                    inputFecha_factura.value = fecha_factura;
                    modal.querySelector('#inputEstado_id').value = button.getAttribute('data-estado_id');
                    modal.querySelector('#inputTipo_bien_id').value = button.getAttribute('data-tipo_bien_id');
                    modal.querySelector('#inputDescripcion_bien_id').value = button.getAttribute(
                        'data-descripcion_bien_id');
                    modal.querySelector('#inputModelo_id').value = button.getAttribute('data-modelo_id');
                    modal.querySelector('#inputUbicacion_id').value = button.getAttribute('data-ubicacion_id');
                    modal.querySelector('#inputProveedor_id').value = button.getAttribute('data-proveedor_id');
                    modal.querySelector('#inputResponsable_id').value = button.getAttribute(
                        'data-responsable_id');
                    modal.querySelector('#inputResguardatorio_id').value = button.getAttribute(
                        'data-resguardatorio_id');
                    modal.querySelector('#inputComentario').value = button.getAttribute('data-comentario');
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
