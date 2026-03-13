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
                <div class="text-center mb-4">
                    <h2 class="mb-3 text-white">Acceder</h2>
                    <p class="text-light mb-0">Entra en tu cuenta de Muse.</p>
                </div>

                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Correo electrónico</label>
                        <input type="email" id="email" class="form-control" placeholder="Tu email">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-white">Contraseña</label>
                        <input type="password" id="password" class="form-control" placeholder="Tu contraseña">
                    </div>

                    <button type="button" class="btn btn-primary w-100">Acceder</button>
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
@endsection