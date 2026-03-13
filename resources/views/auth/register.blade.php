@extends('layouts.app')

@section('title', 'Muse - Registro')

@section('content')
<div class="container min-vh-100 d-flex align-items-start justify-content-center py-5" style="padding-top: 180px !important;">
    <div class="row justify-content-center w-100">
        <div class="col-lg-6 col-xl-5">
            <div class="text-center mb-4">
                <h2 class="mb-3 display-5">Registro</h2>
                <p class="text-light">Selecciona el tipo de cuenta con el que quieres entrar en Muse.</p>
            </div>

            <div class="mb-4">
                <select id="accountType" class="form-control">
                    <option value="">Selecciona tipo de cuenta</option>
                    <option value="artist">Artista</option>
                    <option value="collector">Coleccionista</option>
                </select>
            </div>

            <form id="artistForm" style="display: none;">
                <div class="mb-3">
                    <input type="text" placeholder="Nombre artístico" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Contraseña" class="form-control">
                </div>
                <button type="button" class="btn btn-primary w-100">Registrarme como artista</button>
            </form>

            <form id="collectorForm" style="display: none;">
                <div class="mb-3">
                    <input type="text" placeholder="Nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Contraseña" class="form-control">
                </div>
                <button type="button" class="btn btn-primary w-100">Registrarme como coleccionista</button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const accountType = document.getElementById('accountType');
    const artistForm = document.getElementById('artistForm');
    const collectorForm = document.getElementById('collectorForm');

    if (!accountType || !artistForm || !collectorForm) return;

    accountType.addEventListener('change', function () {
        artistForm.style.display = 'none';
        collectorForm.style.display = 'none';

        if (this.value === 'artist') {
            artistForm.style.display = 'block';
        }

        if (this.value === 'collector') {
            collectorForm.style.display = 'block';
        }
    });
});
</script>
@endsection