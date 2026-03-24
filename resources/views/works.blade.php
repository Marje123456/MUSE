@extends('layouts.app')

@section('title', 'Muse - Obras')

@section('header')
    <div class="page-header pb-5">
        <div class="container text-center py-5">
            <h1 class="display-4 text-uppercase mb-3 animated slideInDown">Obras</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Obras</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection

@section('content')
<div class="container py-5">
    <div class="text-center">
        <h2>Galería de obras</h2>
        <p class="text-light">Aquí irá la vista de miniaturas protegidas de Muse.</p>
    </div>
</div>
@endsection