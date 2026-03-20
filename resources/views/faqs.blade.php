@extends('layouts.app')

@section('title', 'Muse - FAQs')

@section('header')
    <div class="page-header pb-5">
        <div class="container text-center py-5">
            <h1 class="display-4 text-uppercase mb-3 animated slideInDown">FAQs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">FAQs</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <h2 class="mb-3">Preguntas frecuentes</h2>
                <p class="text-light">Aquí resolveremos las dudas principales sobre cómo funciona Muse.</p>
            </div>

            <div class="mb-4">
                <h4>¿Qué es Muse?</h4>
                <p class="text-light">Muse es una galería digital y marketplace de encargos artísticos personalizados.</p>
            </div>

            <div class="mb-4">
                <h4>¿Cómo funciona un encargo?</h4>
                <p class="text-light">Un coleccionista publica una propuesta o contacta directamente con un artista. El pago se protege y la obra se entrega dentro de un proceso estructurado.</p>
            </div>

            <div class="mb-4">
                <h4>¿Qué papel tiene la certificación digital?</h4>
                <p class="text-light">Permite asociar la obra con su autoría, propiedad e historial sin que la complejidad técnica sea visible para el usuario.</p>
            </div>
        </div>
    </div>
</div>
@endsection