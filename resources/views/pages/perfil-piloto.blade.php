@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-f1-white">PERFIL DEL PILOTO</h1>

    <section class="d-flex justify-content-center">
        
        <article class="card border-team-{{ $piloto_seleccionado['equipo_clase'] }}" style="max-width: 600px; width: 100%; border-left-width: 5px;">
            
            <div class="bg-f1-black-light text-center pt-3 border-bottom border-team-{{ $piloto_seleccionado['equipo_clase'] }}">
                <span class="badge bg-team-{{ $piloto_seleccionado['equipo_clase'] }} mb-2" style="font-size: 1.2rem;">
                    #{{ $piloto_seleccionado['numero'] }}
                </span>
            </div>

            <div class="bg-f1-black-light d-flex justify-content-center px-4 pb-0 rounded-0">
                <img src="{{ asset('img/' . $piloto_seleccionado['imagen']) }}" class="img-fluid" alt="{{ $piloto_seleccionado['nombre'] }}" style="object-fit: cover; max-height: 400px;">
            </div>

            <div class="card-body p-4 text-start">
                <h2 class="h4 fw-bold text-f1-white mb-3">{{ $piloto_seleccionado['nombre'] }}</h2>
                
                {{-- Información Clave --}}
                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <div class="stat-card p-3">
                            <div class="text-f1-gray mb-1" style="font-size: 0.75rem; text-transform: uppercase;">Nacionalidad</div>
                            <div class="text-f1-white fw-bold" style="font-size: 0.95rem;">{{ $piloto_seleccionado['nacionalidad'] }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card p-3">
                            <div class="text-f1-gray mb-1" style="font-size: 0.75rem; text-transform: uppercase;">Número</div>
                            <div class="text-team-{{ $piloto_seleccionado['equipo_clase'] }} fw-bold" style="font-size: 1.5rem;">#{{ $piloto_seleccionado['numero'] }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card p-3">
                            <div class="text-f1-gray mb-1" style="font-size: 0.75rem; text-transform: uppercase;">Equipo Actual</div>
                            <div class="text-f1-white fw-bold" style="font-size: 0.95rem;">{{ $piloto_seleccionado['equipo'] }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card p-3">
                            <div class="text-f1-gray mb-1" style="font-size: 0.75rem; text-transform: uppercase;">Experiencia</div>
                            <div class="text-f1-white fw-bold" style="font-size: 0.95rem;">{{ $piloto_seleccionado['anos_f1'] }} años en F1</div>
                        </div>
                    </div>
                </div>

                {{-- Badge del Equipo --}}
                <div class="mb-4">
                    <span class="badge bg-team-{{ $piloto_seleccionado['equipo_clase'] }} px-3 py-2" style="font-size: 0.9rem;">
                        🏎️ {{ $piloto_seleccionado['equipo'] }}
                    </span>
                </div>

                {{-- Historia del Piloto --}}
                <div class="mb-4">
                    <h3 class="h6 fw-bold text-f1-white mb-3 border-bottom border-f1-red pb-2">📖 BIOGRAFÍA</h3>
                    <p class="text-f1-gray" style="font-size: 0.9rem; line-height: 1.7; text-align: justify;">
                        {{ $piloto_seleccionado['historia'] }}
                    </p>
                </div>
                
                {{-- Botón Volver --}}
                <div class="mt-4 pt-3 border-top border-secondary">
                    <a href="{{ route('pilotos') }}" class="btn btn-primary w-100 py-2 text-decoration-none" style="font-size: 0.85rem; font-weight: bold;">
                        ← VOLVER A TODOS LOS PILOTOS
                    </a>
                </div>

            </div>

        </article>
        
    </section>
@endsection