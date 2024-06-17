@extends('layouts.plantilla')

@section('title', 'Inicio de Sesión')

@section('content')


<main role="main" class="container my-auto mt-5 pt-5">
    <div class="row">
        <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
            col-12">
            <h2 class="text-center">Bienvenido de nuevo</h2>
            <img class="img-fluid mx-auto d-block rounded" style="width: 70%"
                src="{{ asset('images/logo/logoitsmgrande.png') }}" />

            <form>
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input id="correo" name="correo"
                        class="form-control" type="email"
                        placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input id="password" name="password"
                        class="form-control" type="password"
                        placeholder="Contraseña">
                </div>
                <hr>    
                <button type="submit" class="btn btn-primary mb-2 navbar-color-personalizado" style="hover: #">
                    Entrar
                </button>
                <br>
                <a href="#">Contraseña olvidada</a>
            </form>
        </div>
    </div>
</main>








@endsection