@extends('layouts.app')

@section('contenido')
    {{-- Sección Hero: Próxima Carrera --}}
    <section class="hero-section mb-5 rounded fade-in-up">
        <div class="text-center">
            <h1 class="fw-bold mb-4 text-shadow-red">PRÓXIMA CARRERA</h1>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-f1-red box-shadow-red">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset('img/gp-australia.jpg') }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="GP de Australia">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-4">
                                    <span class="badge bg-f1-red mb-3">PRIMERA CARRERA</span>
                                    <h2 class="h3 fw-bold text-f1-white mb-3">GP DE AUSTRALIA</h2>
                                    <div class="mb-3">
                                        <p class="mb-2"><strong>📅 Fecha:</strong> 14-16 Marzo 2025</p>
                                        <p class="mb-2"><strong>🏁 Circuito:</strong> Albert Park, Melbourne</p>
                                        <p class="mb-0"><strong>🌍 País:</strong> Australia</p>
                                    </div>
                                    <a href="{{ route('detalle-gp', 'australia') }}" class="btn btn-primary">
                                        VER DETALLES DEL GP →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Divisor decorativo --}}
    <div class="divider-red"></div>

    {{-- Estadísticas Rápidas --}}
    <section class="mb-5 slide-in-left">
        <h2 class="fw-bold mb-4 text-center text-f1-white">📊 ESTADÍSTICAS DE LA TEMPORADA</h2>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <div class="stat-number">🏆 1</div>
                    <div class="stat-label">Líder del Campeonato</div>
                    <p class="text-f1-white mt-2 mb-0">Max Verstappen</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <div class="stat-number">🏁 6</div>
                    <div class="stat-label">Carreras Programadas</div>
                    <p class="text-f1-gray mt-2 mb-0">Temporada 2025</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <div class="stat-number">👥 6</div>
                    <div class="stat-label">Pilotos Destacados</div>
                    <p class="text-f1-gray mt-2 mb-0">En nuestro sitio</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <div class="stat-number">🏎️ 10</div>
                    <div class="stat-label">Equipos F1</div>
                    <p class="text-f1-gray mt-2 mb-0">Temporada 2025</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Divisor decorativo --}}
    <div class="divider-red"></div>

    {{-- Sección: Explora --}}
    <section class="mb-5">
        <h2 class="fw-bold mb-4 text-center text-f1-white">🎯 EXPLORA F1 2025</h2>
        
        <div class="row g-4">
            
            <article class="col-md-4">
                <div class="card card-gp h-100 hover-lift border-left-red">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('img/gp-australia.jpg') }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="GP de Australia">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="badge bg-f1-red mb-2 align-self-start">CALENDARIO</span>
                        <h3 class="h5 fw-bold text-f1-white mb-2">GRANDES PREMIOS</h3>
                        <p class="text-f1-gray mb-3" style="font-size: 0.9rem;">
                            Descubre todos los circuitos, fechas y detalles de cada carrera de la temporada 2025.
                        </p>
                        <a href="{{ route('calendario') }}" class="btn btn-outline-primary mt-auto">
                            VER CALENDARIO COMPLETO
                        </a>
                    </div>
                </div>
            </article>

            <article class="col-md-4">
                <div class="card card-gp h-100 hover-lift border-left-red">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('img/max-verstappen.png') }}" class="card-img-top w-100 h-100" style="object-fit: cover; object-position: top;" alt="Max Verstappen">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="badge bg-team-redbull mb-2 align-self-start">PILOTOS</span>
                        <h3 class="h5 fw-bold text-f1-white mb-2">NUESTROS CORREDORES</h3>
                        <p class="text-f1-gray mb-3" style="font-size: 0.9rem;">
                            Conoce la historia, estadísticas y trayectoria de los mejores pilotos de F1.
                        </p>
                        <a href="{{ route('pilotos') }}" class="btn btn-outline-primary mt-auto">
                            VER TODOS LOS PILOTOS
                        </a>
                    </div>
                </div>
            </article>

            <article class="col-md-4">
                <div class="card card-gp h-100 hover-lift border-left-red">
                    <div class="overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('img/tabla-posiciones.png') }}" class="card-img-top w-100 h-100" style="object-fit: cover; object-position: top;" alt="Tabla de Posiciones">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="badge bg-f1-gold text-dark mb-2 align-self-start">CLASIFICACIÓN</span>
                        <h3 class="h5 fw-bold text-f1-white mb-2">TABLA DE POSICIONES</h3>
                        <p class="text-f1-gray mb-3" style="font-size: 0.9rem;">
                            Consulta las posiciones actuales de pilotos y constructores en el campeonato.
                        </p>
                        <a href="{{ route('clasificacion') }}" class="btn btn-outline-primary mt-auto">
                            VER CLASIFICACIÓN
                        </a>
                    </div>
                </div>
            </article>
            
        </div>
    </section>

    {{-- Divisor decorativo --}}
    <div class="divider-red"></div>

    {{-- Sección: Acceso Rápido --}}
    <section class="mb-5">
        <h2 class="fw-bold mb-4 text-center text-f1-white">⚡ ACCESO RÁPIDO</h2>
        <div class="row g-3">
            <div class="col-md-3 col-sm-6">
                <a href="{{ route('equipos') }}" class="text-decoration-none">
                    <div class="card hover-lift text-center p-4 border-f1-gray">
                        <div class="mb-3" style="font-size: 2.5rem;">🏎️</div>
                        <h4 class="h6 fw-bold text-f1-white mb-2">EQUIPOS</h4>
                        <p class="text-f1-gray mb-0" style="font-size: 0.85rem;">Escuderías 2025</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ route('galeria') }}" class="text-decoration-none">
                    <div class="card hover-lift text-center p-4 border-f1-gray">
                        <div class="mb-3" style="font-size: 2.5rem;">📸</div>
                        <h4 class="h6 fw-bold text-f1-white mb-2">GALERÍA</h4>
                        <p class="text-f1-gray mb-0" style="font-size: 0.85rem;">Mejores momentos</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ route('reglamento') }}" class="text-decoration-none">
                    <div class="card hover-lift text-center p-4 border-f1-gray">
                        <div class="mb-3" style="font-size: 2.5rem;">📋</div>
                        <h4 class="h6 fw-bold text-f1-white mb-2">REGLAMENTO</h4>
                        <p class="text-f1-gray mb-0" style="font-size: 0.85rem;">Reglas oficiales</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ route('contacto') }}" class="text-decoration-none">
                    <div class="card hover-lift text-center p-4 border-f1-gray">
                        <div class="mb-3" style="font-size: 2.5rem;">✉️</div>
                        <h4 class="h6 fw-bold text-f1-white mb-2">CONTACTO</h4>
                        <p class="text-f1-gray mb-0" style="font-size: 0.85rem;">Escríbenos</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection