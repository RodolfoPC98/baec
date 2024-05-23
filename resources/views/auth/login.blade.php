<!doctype html>
<html lang="es">

<head>
    <title>Iniciar Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div style="flex-direction: column; margin: 100px 0" class="col-sm-6 text-black d-flex justify-content-center align-items-center">

                    <div>
                        <img src="{{ asset('images/logo/logoitsmgrande.png')}}" alt="Logo ITSM">
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 pt-5 pt-xl-0 ">

                        <form action="{{route('login')}}" method="post" style="width: 23rem;">
                            @csrf
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #3f1825">Iniciar Sesión</h3>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="email">Usuario</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Ingresa tu usuario..." />
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="password">Contraseña</label>
                                <input type="password" name="password_confirmation" id="password" class="form-control form-control-lg" placeholder="Ingresa tu contraseña..." />
                            </div>

                            <div class="pt-1 mb-4">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg btn-block"
                                    type="submit" style="background-color: #692E42 ; border: 2px solid #3f1825">Acceder</button>
                            </div>

                            {{-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a></p> --}}

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block vh-100" style="background: #692E42">
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
