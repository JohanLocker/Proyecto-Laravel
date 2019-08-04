@extends('Shared.Layout-w')


@section('title', 'Creacion Usuario')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form class="login100-form validate-form" method="POST" action="/Usuarios">
                @csrf
                <span class="login100-form-title">
                    Registro de usuarios
                </span>

                <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Introducir usuario">
                    <input class="input100" type="text" name="usuario">
                    <span class="focus-input100" data-placeholder="Usuario"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="correo">
                    <input class="input100" type="email" name="correo">
                    <span class="focus-input100" data-placeholder="Correo"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Introducir contraseña">
                    <input class="input100" type="password" name="contrasena">
                    <span class="focus-input100" data-placeholder="Contraseña"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Repetir Contraseña">
                    <input class="input100" type="password" name="RepetirContrasena">
                    <span class="focus-input100" data-placeholder="Contraseña"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Crear usuario
                    </button>
                </div>

                <ul class="login-more p-t-60">
                    <li>
                        <span class="txt1">
                            ¿Ya tienes cuenta?
                        </span>

                        <a href="{{ url('/Autenticacion') }}" class="txt2">
                            Iniciar sesion
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
@endsection
    