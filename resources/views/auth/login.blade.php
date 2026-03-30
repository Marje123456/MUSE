@extends('layouts.app')

@section('title', 'Muse - Acceso')

@section('header')
<div class="page-header pb-5">
    <div class="container text-center py-5">
        <h1 class="display-4 text-uppercase mb-3 animated slideInDown">Acceder</h1>
    </div>
</div>
@endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="bg-dark rounded p-4 p-md-5 shadow">
                @if (session('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Tu email" value="{{ old('email') }}">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-white">Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Tu contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Acceder</button>
                </form>

                <div class="text-center mt-4">
                    <p class="mb-0 text-light">
                        ¿Aún no tienes cuenta?
                        <a href="{{ route('register') }}" class="text-primary">Registrarme</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
form .form-control,
form .form-control::placeholder,
form .form-label {
    color: #000 !important;
}

form .form-control {
    background-color: #fff !important;
}
</style>
@endsection