@extends('layouts.app')

@section('title', 'Muse - Servicios')

@section('header')
    <div class="page-header pb-5">
        <div class="container text-center py-5">
            <h1 class="display-4 text-uppercase mb-3 animated slideInDown">Servicios</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Servicios</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection

@section('content')
@php
    $view = request('view');
@endphp

@if(!$view)
<!-- Service Start -->
<div class="container-fluid py-5" id="services">
    <div class="container py-5">
        <div class="text-center">
            <div class="title wow fadeInUp" data-wow-delay="0.1s">
                <div class="title-center">
                    <h5><span>Servicios</span></h5>
                    <h1>Cómo funciona la experiencia Muse</h1>
                </div>
            </div>
        </div>

        <div class="service-item service-item-left">
            <div class="row g-0 align-items-center">
                <div class="col-md-5">
                    <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/img/service-1.jpg') }}" alt="Encargos abiertos en Muse">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="service-text px-5 px-md-0 py-md-5 wow fadeInRight" data-wow-delay="0.5s">
                        <h3 class="text-uppercase">Encargos abiertos</h3>
                        <p class="mb-4">
                            Los coleccionistas pueden publicar una propuesta con categoría, presupuesto y descripción
                            para recibir aplicaciones de artistas profesionales. Muse organiza el proceso para que la
                            elección sea más clara, visual y estructurada.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-item service-item-right">
            <div class="row g-0 align-items-center">
                <div class="col-md-5 order-md-1 text-md-end">
                    <div class="service-img p-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/img/service-2.jpg') }}" alt="Propuesta directa en Muse">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="service-text px-5 px-md-0 py-md-5 text-md-end wow fadeInLeft" data-wow-delay="0.5s">
                        <h3 class="text-uppercase">Propuesta directa</h3>
                        <p class="mb-4">
                            Muse también permite una relación más cercana entre artista y coleccionista. Desde el perfil
                            del artista, el coleccionista puede enviar un encargo privado y crear una experiencia más
                            personal, selecta y alineada con el mundo del arte.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-item service-item-left">
            <div class="row g-0 align-items-center">
                <div class="col-md-5">
                    <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/img/service-3.jpg') }}" alt="Obras en Muse">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="service-text px-5 px-md-0 py-md-5 wow fadeInRight" data-wow-delay="0.5s">
                        <h3 class="text-uppercase">Obras verificables</h3>
                        <p class="mb-4">
                            Cada creación dentro de Muse puede integrarse en una experiencia de colección más clara,
                            mejor presentada y preparada para conservar autoría, contexto e historial.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-item service-item-right">
            <div class="row g-0 align-items-center">
                <div class="col-md-5 order-md-1 text-md-end">
                    <div class="service-img p-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/img/service-4.jpg') }}" alt="Crecimiento en Muse">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="service-text px-5 px-md-0 py-md-5 text-md-end wow fadeInLeft" data-wow-delay="0.5s">
                        <h3 class="text-uppercase">Crecimiento en la plataforma</h3>
                        <p class="mb-4">
                            Muse no solo conecta encargos: también construye reputación, visibilidad y recorrido
                            dentro de un ecosistema pensado para que artistas y coleccionistas crezcan con sentido.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endif

<!-- Dynamic Details Start -->
<div class="container-fluid py-5 bg-secondary" id="service-detail-container">
    <div class="container py-5">

        <div id="artists-role" style="{{ $view === 'artists' ? '' : 'display: none;' }}">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center mb-5">
                        <div class="title wow fadeInUp" data-wow-delay="0.1s">
                            <div class="title-center">
                                <h5><span>Artistas</span></h5>
                                <h1>El papel del artista en Muse</h1>
                            </div>
                        </div>
                    </div>

                    <p class="mb-4">
                        En Muse, el artista no participa como un perfil genérico dentro de un marketplace masivo,
                        sino como parte de una galería digital especializada en encargos artísticos personalizados.
                        Su presencia está orientada a mostrar identidad, estilo y propuesta artística dentro de un
                        entorno curado y profesional.
                    </p>

                    <p class="mb-4">
                        El artista puede recibir encargos a través de propuestas abiertas publicadas por coleccionistas
                        o mediante solicitudes directas desde su perfil. Esto le permite trabajar tanto desde una lógica
                        más competitiva como desde una relación más selecta y cercana con quien encarga la obra.
                    </p>

                    <p class="mb-0">
                        Muse estructura el proceso con mayor claridad, reputación y protección en el pago, de modo que
                        el artista pueda centrarse en la creación de piezas con valor, autoría y proyección dentro de un
                        ecosistema pensado para el arte digital personalizado.
                    </p>
                </div>
            </div>
        </div>

        <div id="collectors-role" style="{{ $view === 'collectors' ? '' : 'display: none;' }}">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center mb-5">
                        <div class="title wow fadeInUp" data-wow-delay="0.1s">
                            <div class="title-center">
                                <h5><span>Coleccionistas</span></h5>
                                <h1>El papel del coleccionista en Muse</h1>
                            </div>
                        </div>
                    </div>

                    <p class="mb-4">
                        En Muse, el coleccionista no solo encarga una obra: accede a una experiencia estructurada para
                        descubrir artistas, definir propuestas y construir piezas digitales con intención, autoría y
                        valor duradero.
                    </p>

                    <p class="mb-4">
                        Puede publicar un encargo abierto con categoría, presupuesto y descripción para recibir propuestas,
                        o dirigirse directamente a un artista concreto y plantear una obra privada. Esa flexibilidad le
                        permite elegir entre una dinámica más abierta o una interacción más personal.
                    </p>

                    <p class="mb-0">
                        Muse organiza todo el proceso con mayor claridad, protección en el pago y trazabilidad, facilitando
                        que cada obra no solo sea una creación personalizada, sino también una pieza verificable y preparada
                        para integrarse en una colección digital con mayor significado.
                    </p>
                </div>
            </div>
        </div>

        <div id="works-role" style="{{ $view === 'works' ? '' : 'display: none;' }}">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center mb-5">
                        <div class="title wow fadeInUp" data-wow-delay="0.1s">
                            <div class="title-center">
                                <h5><span>Obras</span></h5>
                                <h1>Cómo funcionan las obras dentro de Muse</h1>
                            </div>
                        </div>
                    </div>

                    <p class="mb-4">
                        En Muse, cada obra nace como una creación por encargo, pero se presenta dentro de una lógica de
                        galería digital. Eso significa que no solo importa la entrega final, sino también la forma en que
                        la pieza se registra, se contextualiza y se integra dentro de una colección.
                    </p>

                    <p class="mb-4">
                        La obra puede asociarse a información de autoría, propiedad, historial y edición, lo que aporta
                        mayor valor y claridad tanto para el artista como para el coleccionista. Muse convierte una pieza
                        personalizada en una creación con presencia, trazabilidad y proyección.
                    </p>

                    <p class="mb-0">
                        De este modo, las obras no quedan reducidas a un simple archivo entregado, sino que pasan a formar
                        parte de una experiencia curada, verificable y potencialmente coleccionable dentro del ecosistema.
                    </p>
                </div>
            </div>
        </div>

        <div id="growth-role" style="{{ $view === 'growth' ? '' : 'display: none;' }}">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center mb-5">
                        <div class="title wow fadeInUp" data-wow-delay="0.1s">
                            <div class="title-center">
                                <h5><span>Crecimiento</span></h5>
                                <h1>Cómo se crece dentro de Muse</h1>
                            </div>
                        </div>
                    </div>

                    <p class="mb-4">
                        Muse está pensado para que el crecimiento no dependa solo del volumen, sino de la calidad de la
                        experiencia. Los artistas pueden consolidar reputación, mostrar evolución de su estilo y recibir
                        mejores oportunidades a medida que completan encargos con buenos resultados.
                    </p>

                    <p class="mb-4">
                        Los coleccionistas, por su parte, construyen una relación más profunda con el arte digital
                        personalizado, descubren nuevos perfiles, afinan sus criterios y desarrollan una colección con
                        mayor coherencia y valor.
                    </p>

                    <p class="mb-0">
                        En ambos casos, Muse funciona como una infraestructura para crecer con claridad, visibilidad,
                        reputación y trazabilidad dentro de una plataforma más cuidada y especializada.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Dynamic Details End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5 bg-secondary">
    <div class="container py-5">
        <div class="text-center">
            <div class="title wow fadeInUp" data-wow-delay="0.1s">
                <div class="title-center">
                    <h5>Testimonial</h5>
                    <h1>Our Clients Say</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="testimonial-item text-center"
                data-dot="<img class='img-fluid' src='{{ asset('assets/img/testimonial-1.jpg') }}' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                    sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                    justo sea clita.</p>
                <h5 class="text-uppercase">Joanne Irwin</h5>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item text-center"
                data-dot="<img class='img-fluid' src='{{ asset('assets/img/testimonial-2.jpg') }}' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                    sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                    justo sea clita.</p>
                <h5 class="text-uppercase">Lana Anderson</h5>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item text-center"
                data-dot="<img class='img-fluid' src='{{ asset('assets/img/testimonial-3.jpg') }}' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                    sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                    justo sea clita.</p>
                <h5 class="text-uppercase">Pamela Torney</h5>
                <span class="text-primary">Profession</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection