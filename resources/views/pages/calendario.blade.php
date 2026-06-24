@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-f1-white">CALENDARIO TEMPORADA 2025</h1>

    {{-- Línea de tiempo visual --}}
    <div class="mb-5 text-center">
        <div class="d-inline-flex align-items-center gap-3 flex-wrap justify-content-center">
            <div class="d-flex align-items-center">
                <span class="badge bg-success me-2">●</span>
                <small class="text-f1-gray">Completado</small>
            </div>
            <div class="d-flex align-items-center">
                <span class="badge bg-f1-red me-2">●</span>
                <small class="text-f1-gray">Próximo</small>
            </div>
            <div class="d-flex align-items-center">
                <span class="badge bg-f1-gray me-2">●</span>
                <small class="text-f1-gray">Pendiente</small>
            </div>
        </div>
    </div>

    <section class="row g-4">
        
        {{-- GP de Australia --}}
        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'australia') }}" class="text-decoration-none">
                <div class="card card-gp h-100 border-f1-red" style="border-left-width: 4px; position: relative;">
                    <span class="badge bg-f1-red position-absolute top-0 end-0 m-3" style="z-index: 10;">PRÓXIMO</span>
                    <img src="{{ asset('img/gp-australia.jpg') }}" class="card-img-top rounded-0" alt="GP Australia" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="h6 fw-bold text-f1-white mb-0">GP DE AUSTRALIA</h3>
                            <span class="badge bg-f1-gray">#1</span>
                        </div>
                        <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">
                            📅 14 al 16 de marzo de 2025
                        </p>
                        <p class="text-f1-gray mb-3" style="font-size: 0.8rem;">
                            🏁 Albert Park, Melbourne
                        </p>
                        
                        {{-- Contador de días --}}
                        <div class="alert alert-danger mb-0 py-2" style="font-size: 0.85rem; background-color: rgba(225, 6, 0, 0.1); border-color: var(--f1-red);">
                            ⏰ <strong>Faltan 263 días</strong>
                        </div>
                    </div>
                </div>
            </a>
        </article>

        {{-- GP de China --}}
        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'china') }}" class="text-decoration-none">
                <div class="card card-gp h-100 border-f1-gray" style="border-left-width: 4px; position: relative;">
                    <span class="badge bg-f1-gray position-absolute top-0 end-0 m-3" style="z-index: 10;">PENDIENTE</span>
                    <img src="{{ asset('img/gp-china.jpg') }}" class="card-img-top rounded-0" alt="GP China" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="h6 fw-bold text-f1-white mb-0">GP DE CHINA</h3>
                            <span class="badge bg-f1-gray">#2</span>
                        </div>
                        <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">
                            📅 21 al 23 de marzo de 2025
                        </p>
                        <p class="text-f1-gray mb-3" style="font-size: 0.8rem;">
                            🏁 Shanghai International Circuit
                        </p>
                        
                        {{-- Contador de días --}}
                        <div class="alert alert-secondary mb-0 py-2" style="font-size: 0.85rem; background-color: rgba(56, 56, 63, 0.3); border-color: var(--f1-gray);">
                            ⏰ <strong>Faltan 270 días</strong>
                        </div>
                    </div>
                </div>
            </a>
        </article>

        {{-- GP de Japón --}}
        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'japon') }}" class="text-decoration-none">
                <div class="card card-gp h-100 border-f1-gray" style="border-left-width: 4px; position: relative;">
                    <span class="badge bg-f1-gray position-absolute top-0 end-0 m-3" style="z-index: 10;">PENDIENTE</span>
                    <img src="{{ asset('img/gp-japon.jpg') }}" class="card-img-top rounded-0" alt="GP Japon" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="h6 fw-bold text-f1-white mb-0">GP DE JAPÓN</h3>
                            <span class="badge bg-f1-gray">#3</span>
                        </div>
                        <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">
                            📅 4 al 6 de abril de 2025
                        </p>
                        <p class="text-f1-gray mb-3" style="font-size: 0.8rem;">
                            🏁 Suzuka International Racing Course
                        </p>
                        
                        {{-- Contador de días --}}
                        <div class="alert alert-secondary mb-0 py-2" style="font-size: 0.85rem; background-color: rgba(56, 56, 63, 0.3); border-color: var(--f1-gray);">
                            ⏰ <strong>Faltan 284 días</strong>
                        </div>
                    </div>
                </div>
            </a>
        </article>

        {{-- GP de Bahréin --}}
        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'bahrein') }}" class="text-decoration-none">
                <div class="card card-gp h-100 border-f1-gray" style="border-left-width: 4px; position: relative;">
                    <span class="badge bg-f1-gray position-absolute top-0 end-0 m-3" style="z-index: 10;">PENDIENTE</span>
                    <img src="{{ asset('img/gp-bahrein.jpg') }}" class="card-img-top rounded-0" alt="GP Bahrein" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="h6 fw-bold text-f1-white mb-0">GP DE BAHRÉIN</h3>
                            <span class="badge bg-f1-gray">#4</span>
                        </div>
                        <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">
                            📅 11 al 13 de abril de 2025
                        </p>
                        <p class="text-f1-gray mb-3" style="font-size: 0.8rem;">
                            🏁 Bahrain International Circuit, Sakhir
                        </p>
                        
                        {{-- Contador de días --}}
                        <div class="alert alert-secondary mb-0 py-2" style="font-size: 0.85rem; background-color: rgba(56, 56, 63, 0.3); border-color: var(--f1-gray);">
                            ⏰ <strong>Faltan 291 días</strong>
                        </div>
                    </div>
                </div>
            </a>
        </article>

        {{-- GP de Arabia Saudí --}}
        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'arabia-saudi') }}" class="text-decoration-none">
                <div class="card card-gp h-100 border-f1-gray" style="border-left-width: 4px; position: relative;">
                    <span class="badge bg-f1-gray position-absolute top-0 end-0 m-3" style="z-index: 10;">PENDIENTE</span>
                    <img src="{{ asset('img/gp-arabia.jpg') }}" class="card-img-top rounded-0" alt="GP Arabia Saudi" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="h6 fw-bold text-f1-white mb-0">GP DE ARABIA SAUDÍ</h3>
                            <span class="badge bg-f1-gray">#5</span>
                        </div>
                        <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">
                            📅 18 al 20 de abril de 2025
                        </p>
                        <p class="text-f1-gray mb-3" style="font-size: 0.8rem;">
                            🏁 Jeddah Corniche Circuit
                        </p>
                        
                        {{-- Contador de días --}}
                        <div class="alert alert-secondary mb-0 py-2" style="font-size: 0.85rem; background-color: rgba(56, 56, 63, 0.3); border-color: var(--f1-gray);">
                            ⏰ <strong>Faltan 298 días</strong>
                        </div>
                    </div>
                </div>
            </a>
        </article>

        {{-- GP de USA --}}
        <article class="col-md-4">
            <a href="{{ route('detalle-gp', 'usa') }}" class="text-decoration-none">
                <div class="card card-gp h-100 border-f1-gray" style="border-left-width: 4px; position: relative;">
                    <span class="badge bg-f1-gray position-absolute top-0 end-0 m-3" style="z-index: 10;">PENDIENTE</span>
                    <img src="{{ asset('img/gp-usa.jpg') }}" class="card-img-top rounded-0" alt="GP USA" style="object-fit: cover; height: 250px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h3 class="h6 fw-bold text-f1-white mb-0">GP DE ESTADOS UNIDOS</h3>
                            <span class="badge bg-f1-gray">#6</span>
                        </div>
                        <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">
                            📅 17 al 19 de octubre de 2025
                        </p>
                        <p class="text-f1-gray mb-3" style="font-size: 0.8rem;">
                            🏁 Circuit of the Americas, Austin
                        </p>
                        
                        {{-- Contador de días --}}
                        <div class="alert alert-secondary mb-0 py-2" style="font-size: 0.85rem; background-color: rgba(56, 56, 63, 0.3); border-color: var(--f1-gray);">
                            ⏰ <strong>Faltan 480 días</strong>
                        </div>
                    </div>
                </div>
            </a>
        </article>

    </section>

    {{-- Resumen del Calendario --}}
    <div class="row g-4 mt-5">
        <div class="col-md-4">
            <div class="stat-card text-center">
                <div class="stat-number">🏁 6</div>
                <div class="stat-label">Grandes Premios</div>
                <p class="text-f1-gray mt-2 mb-0" style="font-size: 0.85rem;">Temporada 2025</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card text-center">
                <div class="stat-number">🌍 5</div>
                <div class="stat-label">Continentes</div>
                <p class="text-f1-gray mt-2 mb-0" style="font-size: 0.85rem;">Cobertura global</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card text-center">
                <div class="stat-number">📅 7</div>
                <div class="stat-label">Meses de competición</div>
                <p class="text-f1-gray mt-2 mb-0" style="font-size: 0.85rem;">Marzo - Octubre</p>
            </div>
        </div>
    </div>

    <style>
        .card-gp {
            transition: all 0.3s ease;
        }
        
        .card-gp:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(225, 6, 0, 0.4);
        }

        .card-gp:hover .card-img-top {
            filter: brightness(1.1);
        }
    </style>
@endsection

// Made with Bob
