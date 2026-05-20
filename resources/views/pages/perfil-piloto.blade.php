@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-white">PERFIL DEL PILOTO</h1>

    <section class="d-flex justify-content-center">
        
        <article class="card bg-black border-0 rounded-0" style="max-width: 500px; width: 100%;">
            
            <div class="bg-white text-center pt-3">
                <span class="text-muted fw-bold" style="font-size: 0.7rem; letter-spacing: 1px;">FOTO DEL PILOTO</span>
            </div>

            <div class="bg-white d-flex justify-content-center px-4 pb-0 rounded-0">
                <img src="{{ asset('img/' . $piloto_seleccionado['imagen']) }}" class="img-fluid" alt="{{ $piloto_seleccionado['nombre'] }}" style="object-fit: cover;">
            </div>

            <div class="card-body p-4 text-start">
                <h2 class="h5 fw-bold text-white mb-2">{{ $piloto_seleccionado['nombre'] }}</h2>
                
                <p class="text-muted mb-4" style="font-size: 0.85rem; line-height: 1.6;">
                    {{ $piloto_seleccionado['historia'] }}
                </p>
                
                <div class="mt-4 pt-3 border-top border-secondary">
                    <a href="{{ route('pilotos') }}" class="btn btn-primary w-100 py-2 text-decoration-none" style="font-size: 0.8rem; font-weight: bold;">
                        &larr; VOLVER A PILOTOS
                    </a>
                </div>

            </div>

        </article>
        
    </section>
@endsection