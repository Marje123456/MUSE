@extends('layouts.app')

@section('title', 'Muse - Plataforma')

@section('header')
<div class="page-header pb-5">
    <div class="container text-center py-5">
        <h1 class="display-4 text-uppercase mb-3 animated slideInDown">Muse</h1>
        <p class="text-light mb-0">Bienvenido a tu espacio dentro de la plataforma.</p>
    </div>
</div>
@endsection

@section('content')
<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="bg-dark rounded p-4 h-100">
                <h4 class="mb-3 text-white">Mi perfil</h4>
                <p class="mb-0 text-light">Aquí podrás gestionar tu información dentro de Muse.</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="bg-dark rounded p-4 h-100">
                <h4 class="mb-3 text-white">Actividad</h4>
                <p class="mb-0 text-light">Aquí verás encargos, propuestas y movimientos recientes.</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="bg-dark rounded p-4 h-100">
                <h4 class="mb-3 text-white">Colección / obras</h4>
                <p class="mb-0 text-light">Aquí podrás explorar tus obras, encargos o piezas guardadas.</p>
            </div>
        </div>
    </div>
</div>
@endsection