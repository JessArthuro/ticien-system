@extends('layouts.auth-master')

@section('content')
    <section class="section-register p-5 shadow border">
        <div class="text-center mb-3">
            <img class="logo" src="{{ asset('assets/logo.png') }}" alt="">
        </div>

        <form action="/" method="POST" autocomplete="off">
            @csrf
            <h3 class="text-center mb-0">Bienvenido</h3>
            <p class="text-center mb-3 text-secondary">Inicie sesión con su cuenta para continuar</p>

            @include('layouts.partials.messages')

            <div class="mb-3">
                <label for="InputEmail" class="form-label">Correo electronico</label>
                <input name="email" type="email" class="form-control" id="InputEmail"
                    placeholder="mi.correo@company.com">
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Contraseña</label>
                <input name="password" type="password" class="form-control" id="InputPassword" placeholder="********">
            </div>
            <button type="submit" class="btn btn-primary"><i class='bx bx-log-in-circle'></i> Iniciar sesion</button>
        </form>

        <p class="mt-3 mb-0">¿No tienes una cuenta? <a href="/register">Registrate aqui</a></p>
    </section>
@endsection
