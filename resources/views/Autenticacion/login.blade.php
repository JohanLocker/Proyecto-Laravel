<?php
$Mensajes =  null;
?>

@extends('Shared.Layout-w')
@section('title', 'Creacion Usuario')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form class="login100-form validate-form" method="POST" action="/Autenticacion" autocomplete="off">
                @csrf
                <span class="login100-form-title p-b-70">
                    Bienvenidos
                </span>
                <span class="login100-form-avatar">
                    <img src="{{ URL::asset('images/avatar-01.jpg')}}" alt="AVATAR">
                </span>

                <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                    <input class="input100" type="text" name="usuario">
                    <span class="focus-input100" data-placeholder="Usuario"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input class="input100" type="password" name="contrasena">
                    <span class="focus-input100" data-placeholder="Contraseña"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Ingresar
                    </button>
                </div>
                @if ($Mensaje = Session::get('Mensajes'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $Mensaje}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <ul class="login-more p-t-190">
                    <li>
                        <span class="txt1">
                            ¿No tiene cuenta?
                        </span>

                        <a href="{{ url('/Usuarios/create') }}" class="txt2">
                            Registrate
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
@endsection
    