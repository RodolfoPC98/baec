<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/estilos.css') }}">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-color-personalizado">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">
                <img src="{{ asset('images/logo/logoitsmgrande.png') }}" alt="Logotipo" width="120" height="50"
                    class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto me-4">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('usuarios') }}">Ver Usuarios</a></li>
                            <li><a class="dropdown-item" href="{{ route('crear_usuario') }}">Registro de Usuario</a></li>
                        </ul>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Reportes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('reporte_bienes') }}">Bienes</a></li>
                            <li><a class="dropdown-item" href="{{ route('reporte_mantenimientos') }}">Mantenimientos</a></li>
                        </ul>
                    </li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Bienes Inmuebles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('bienes_inmuebles') }}">Ver Bienes Inmueble</a></li>
                            {{-- <li><a class="dropdown-item" href="{{ route('crear_bien_inmueble') }}">Registro de Bien Inmueble</a></li> --}}
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Mini Split
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('mantenimiento') }}">Mantenimiento</a></li>
                            <li><a class="dropdown-item" href="{{ route('actualizar_mantenimiento') }}">Actualización de Datos</a></li>
                            <li><a class="dropdown-item" href="{{ route('ver_mantenimientos') }}">Próximos Mantenimientos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('ver_piezas') }}">Piezas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Bienes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('ver_bienes') }}">Ver Bienes</a></li>
                            <li><a class="dropdown-item" href="{{ route('ver_bienes_computadoras') }}">Ver Bienes Computadoras</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('ver_tipo_bienes') }}">Tipos de Bien</a></li>
                            <li><a class="dropdown-item" href="{{ route('ver_descripcion_bienes') }}">Descripción de Bien</a></li>
                            <li><a class="dropdown-item" href="{{ route('ver_modelos_y_marcas') }}">Modelos y Marcas</a></li>
                            <li><a class="dropdown-item" href="{{ route('ver_ubicaciones') }}">Ubicación</a></li>
                            <li><a class="dropdown-item" href="{{ route('ver_responsables') }}">Responsables/<br>Resguardatarios</a></li>
                            <li><a class="dropdown-item" href="{{ route('ver_proveedores') }}">Proveedores</a></li>
                            <li><a class="dropdown-item" href="{{ route('ver_estados') }}">Estados</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <span><i class="fa-solid fa-user"></i> Perfil</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    @yield('content')


    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.esm.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
