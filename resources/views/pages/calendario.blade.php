@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-white">CALENDARIO 2025</h1>

    <section class="row g-4">
        
        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'australia') }}" class="text-decoration-none">
                <div class="card bg-black border-0 rounded-0 h-100 card-hover-effect">
                    <img src="{{ asset('img/gp-australia.jpg') }}" class="card-img-top rounded-0" alt="GP Australia" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <h3 class="h6 fw-bold text-white mb-1">GP DE AUSTRALIA</h3>
                        <p class="text-muted mb-0" style="font-size: 0.75rem;">Fecha    14 al 16 de marzo de 2025</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'china') }}" class="text-decoration-none">
                <div class="card bg-black border-0 rounded-0 h-100 card-hover-effect">
                    <img src="{{ asset('img/gp-china.jpg') }}" class="card-img-top rounded-0" alt="GP China" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <h3 class="h6 fw-bold text-white mb-1">GP DE CHINA</h3>
                        <p class="text-muted mb-0" style="font-size: 0.75rem;">Fecha    21 al 23 de marzo de 2025</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'japon') }}" class="text-decoration-none">
                <div class="card bg-black border-0 rounded-0 h-100 card-hover-effect">
                    <img src="{{ asset('img/gp-japon.jpg') }}" class="card-img-top rounded-0" alt="GP Japon" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <h3 class="h6 fw-bold text-white mb-1">GP DE JAPÓN</h3>
                        <p class="text-muted mb-0" style="font-size: 0.75rem;">Fecha    4 al 6 de abril de 2025</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'bahrein') }}" class="text-decoration-none">
                <div class="card bg-black border-0 rounded-0 h-100 card-hover-effect">
                    <img src="{{ asset('img/gp-bahrein.jpg') }}" class="card-img-top rounded-0" alt="GP Bahrein" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <h3 class="h6 fw-bold text-white mb-1">GP DE BAHRÉIN</h3>
                        <p class="text-muted mb-0" style="font-size: 0.75rem;">Fecha 11 al 13 de abril de 2025</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'arabia-saudi') }}" class="text-decoration-none">
                <div class="card bg-black border-0 rounded-0 h-100 card-hover-effect">
                    <img src="{{ asset('img/gp-arabia.jpg') }}" class="card-img-top rounded-0" alt="GP Arabia Saudi" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <h3 class="h6 fw-bold text-white mb-1">GP DE ARABIA SAUDÍ</h3>
                        <p class="text-muted mb-0" style="font-size: 0.75rem;">Fecha    18 al 20 de abril de 2025</p>
                    </div>
                </div>
            </a>
        </article>

        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'usa') }}" class="text-decoration-none">
                <div class="card bg-black border-0 rounded-0 h-100 card-hover-effect">
                    <img src="{{ asset('img/gp-usa.jpg') }}" class="card-img-top rounded-0" alt="GP USA" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <h3 class="h6 fw-bold text-white mb-1">GP DE USA</h3>
                        <p class="text-muted mb-0" style="font-size: 0.75rem;">Fecha 17 al 19 de octubre de 2025</p>
                    </div>
                </div>
            </a>
        </article>

    </section>

    <style>
        .card-hover-effect {
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }
        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(225, 6, 0, 0.3); /* Resplandor rojo sutil */
        }
    </style>
@endsection