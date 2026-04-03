@extends('layouts.app')

@section('title', 'Muse - Plataforma')
@section('hide_chrome', 'true')

@section('content')
<div class="container-fluid p-0 dashboard-shell">
    <nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
        <a href="{{ route('dashboard') }}" class="navbar-brand ms-4 ms-lg-0">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Muse" class="logo-img d-inline-block align-middle">
        </a>
    </nav>

    <div class="dashboard-home py-5">
        <div class="container">
            <div class="dashboard-hero text-center mb-5">
                <span class="dashboard-kicker">Muse Platform</span>
                <h1 class="dashboard-title">Descubre artistas y coleccionistas dentro de Muse</h1>
                <p class="dashboard-subtitle mx-auto">
                    Un inicio curado para explorar perfiles, estilo, intención y conexiones dentro de la plataforma.
                </p>
            </div>

            <div class="dashboard-section mb-5">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                    <div>
                        <span class="dashboard-section-label">Artistas</span>
                        <h2 class="dashboard-section-title mb-0">Perfiles destacados</h2>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-image">
                                <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Artista destacado 1">
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-card-meta">Ilustración digital</div>
                                <h4 class="dashboard-card-title">Lina Varela</h4>
                                <p class="dashboard-card-text">
                                    Explora una línea visual elegante y narrativa, pensada para encargos con identidad y sensibilidad contemporánea.
                                </p>
                                <div class="dashboard-tags">
                                    <span>Retrato</span>
                                    <span>Editorial</span>
                                    <span>Color</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-image">
                                <img src="{{ asset('assets/img/team-2.jpg') }}" alt="Artista destacado 2">
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-card-meta">Arte conceptual</div>
                                <h4 class="dashboard-card-title">Marco Elías</h4>
                                <p class="dashboard-card-text">
                                    Perfil orientado a universos visuales, encargos atmosféricos y piezas con construcción estética de alto nivel.
                                </p>
                                <div class="dashboard-tags">
                                    <span>Concept</span>
                                    <span>Mundo visual</span>
                                    <span>Atmósfera</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="dashboard-card h-100">
                            <div class="dashboard-card-image">
                                <img src="{{ asset('assets/img/team-3.jpg') }}" alt="Artista destacado 3">
                            </div>
                            <div class="dashboard-card-body">
                                <div class="dashboard-card-meta">Fotografía artística</div>
                                <h4 class="dashboard-card-title">Nora Vidal</h4>
                                <p class="dashboard-card-text">
                                    Un lenguaje visual más íntimo y curado, enfocado en piezas de autor con carácter coleccionable.
                                </p>
                                <div class="dashboard-tags">
                                    <span>Autor</span>
                                    <span>Curado</span>
                                    <span>Edición</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard-section">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                    <div>
                        <span class="dashboard-section-label">Coleccionistas</span>
                        <h2 class="dashboard-section-title mb-0">Perfiles activos</h2>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="dashboard-card dashboard-card-collector h-100">
                            <div class="dashboard-card-body">
                                <div class="dashboard-card-meta">Colección privada</div>
                                <h4 class="dashboard-card-title">Adrián Soler</h4>
                                <p class="dashboard-card-text">
                                    Interesado en encargos editoriales y piezas digitales con narrativa visual sólida y presentación refinada.
                                </p>
                                <div class="dashboard-tags">
                                    <span>Editorial</span>
                                    <span>Encargos privados</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="dashboard-card dashboard-card-collector h-100">
                            <div class="dashboard-card-body">
                                <div class="dashboard-card-meta">Colección emergente</div>
                                <h4 class="dashboard-card-title">Valeria Costa</h4>
                                <p class="dashboard-card-text">
                                    Busca artistas con propuesta contemporánea para construir una colección digital con identidad y trazabilidad.
                                </p>
                                <div class="dashboard-tags">
                                    <span>Contemporáneo</span>
                                    <span>Colección</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="dashboard-card dashboard-card-collector h-100">
                            <div class="dashboard-card-body">
                                <div class="dashboard-card-meta">Encargos por invitación</div>
                                <h4 class="dashboard-card-title">Daniel Mercer</h4>
                                <p class="dashboard-card-text">
                                    Perfil orientado a propuestas selectas, comisiones directas y obras con valor duradero dentro de Muse.
                                </p>
                                <div class="dashboard-tags">
                                    <span>Directo</span>
                                    <span>Selecto</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .dashboard-shell {
                min-height: 100vh;
                background:
                    radial-gradient(circle at top left, rgba(183, 147, 71, 0.08), transparent 24%),
                    linear-gradient(180deg, #050A30 0%, #040827 100%);
            }

            .dashboard-home {
                padding-top: 2rem;
                padding-bottom: 4rem;
            }

            .dashboard-hero {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            .dashboard-kicker {
                display: inline-block;
                margin-bottom: 1rem;
                padding: .45rem .9rem;
                border: 1px solid rgba(183, 147, 71, 0.45);
                border-radius: 999px;
                color: #d7c28b;
                background: rgba(255, 255, 255, 0.03);
                font-size: .78rem;
                letter-spacing: .16em;
                text-transform: uppercase;
            }

            .dashboard-title {
                color: #f4f6fc;
                font-size: clamp(2rem, 5vw, 3.6rem);
                font-weight: 700;
                line-height: 1.08;
                max-width: 900px;
                margin: 0 auto 1rem auto;
            }

            .dashboard-subtitle {
                max-width: 760px;
                color: rgba(244, 246, 252, 0.74);
                font-size: 1rem;
                margin-bottom: 0;
            }

            .dashboard-section-label {
                display: inline-block;
                margin-bottom: .45rem;
                color: #b79347;
                text-transform: uppercase;
                letter-spacing: .12em;
                font-size: .76rem;
            }

            .dashboard-section-title {
                color: #f4f6fc;
                font-size: 2rem;
                font-weight: 700;
            }

            .dashboard-card {
                background: rgba(255, 255, 255, 0.04);
                border: 1px solid rgba(255, 255, 255, 0.06);
                border-radius: 22px;
                overflow: hidden;
                box-shadow: 0 20px 45px rgba(0, 0, 0, 0.22);
                transition: transform .25s ease, box-shadow .25s ease;
            }

            .dashboard-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 26px 55px rgba(0, 0, 0, 0.28);
            }

            .dashboard-card-image {
                height: 280px;
                overflow: hidden;
                background: #0a1038;
            }

            .dashboard-card-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            .dashboard-card-body {
                padding: 1.4rem;
            }

            .dashboard-card-meta {
                color: #b79347;
                font-size: .8rem;
                text-transform: uppercase;
                letter-spacing: .1em;
                margin-bottom: .8rem;
            }

            .dashboard-card-title {
                color: #f4f6fc;
                font-size: 1.45rem;
                font-weight: 700;
                margin-bottom: .8rem;
            }

            .dashboard-card-text {
                color: rgba(244, 246, 252, 0.76);
                margin-bottom: 1rem;
                line-height: 1.65;
            }

            .dashboard-tags {
                display: flex;
                flex-wrap: wrap;
                gap: .55rem;
            }

            .dashboard-tags span {
                display: inline-flex;
                align-items: center;
                padding: .45rem .8rem;
                border-radius: 999px;
                background: rgba(183, 147, 71, 0.12);
                border: 1px solid rgba(183, 147, 71, 0.22);
                color: #e5d3a7;
                font-size: .82rem;
            }

            .dashboard-card-collector {
                min-height: 100%;
            }

            @media (max-width: 991.98px) {
                .dashboard-card-image {
                    height: 240px;
                }
            }
        </style>
    </div>
</div>
@endsection