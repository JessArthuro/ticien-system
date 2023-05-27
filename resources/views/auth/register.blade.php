@extends('layouts.auth-master')

@section('content')
    <section class="section-register p-5 shadow border">
        <div class="text-center mb-3">
            <img class="logo" src="{{ asset('assets/logo.png') }}" alt="">
        </div>

        <form action="/register" method="POST" autocomplete="off">
            @csrf
            <h3 class="text-center mb-0">Bienvenido</h3>
            <p class="text-center mb-4 text-secondary">Registra tu cuenta</p>

            @include('layouts.partials.messages')

            <div class="mb-3">
                <label for="InputName" class="form-label">Nombre Completo</label>
                <input name="name" type="text" class="form-control" id="InputName" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Correo electronico</label>
                <input name="email" type="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Contraseña</label>
                <input name="password" type="password" class="form-control" id="InputPassword"
                    value="{{ old('password') }}">
                <div class="form-text">La contraseña debe contener al menos 8 caracteres.</div>
            </div>
            <div class="mb-3">
                <label for="InputPasswordConfirmation" class="form-label">Repite la contraseña</label>
                <input name="password_confirmation" type="password" class="form-control" id="InputPasswordConfirmation"
                    value="{{ old('password_confirmation') }}">
            </div>
            <button type="submit" class="btn btn-primary"><i class='bx bx-plus-circle'></i> Crear cuenta</button>
        </form>

        <p class="mt-3 mb-0">¿Ya tienes una cuenta? <a href="/">Inicia sesión aqui</a></p>
    </section>
@endsection
