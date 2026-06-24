@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-f1-white">PILOTOS DE LA TEMPORADA 2025</h1>

    <section class="row g-4">
        
        {{-- Lance Stroll --}}
        <article class="col-md-4">
            <div class="card card-piloto h-100 flex-column border-team-astonmartin" style="border-left-width: 4px;">
                <img src="{{ asset('img/lance-stroll.jpg') }}" class="card-img-top rounded-0" alt="Lance Stroll" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h3 class="h6 fw-bold text-f1-white mb-0">LANCE STROLL</h3>
                        <span class="badge bg-team-astonmartin" style="font-size: 0.9rem;">#18</span>
                    </div>
                    <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">🇨🇦 Canadá</p>
                    <div class="mb-3">
                        <span class="badge bg-team-astonmartin mb-1">Aston Martin</span>
                        <span class="badge bg-f1-gray text-f1-white">8 años en F1</span>
                    </div>
                    <a href="{{ route('perfil-piloto', 'lance-stroll') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL COMPLETO</a>
                </div>
            </div>
        </article>

        {{-- Lewis Hamilton --}}
        <article class="col-md-4">
            <div class="card card-piloto h-100 flex-column border-team-ferrari" style="border-left-width: 4px;">
                <img src="{{ asset('img/lewis-hamilton.jpg') }}" class="card-img-top rounded-0" alt="Lewis Hamilton" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h3 class="h6 fw-bold text-f1-white mb-0">LEWIS HAMILTON</h3>
                        <span class="badge bg-team-ferrari" style="font-size: 0.9rem;">#44</span>
                    </div>
                    <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">🇬🇧 Reino Unido</p>
                    <div class="mb-3">
                        <span class="badge bg-team-ferrari mb-1">Ferrari</span>
                        <span class="badge bg-f1-gray text-f1-white">18 años en F1</span>
                    </div>
                    <a href="{{ route('perfil-piloto', 'lewis-hamilton') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL COMPLETO</a>
                </div>
            </div>
        </article>

        {{-- Carlos Sainz --}}
        <article class="col-md-4">
            <div class="card card-piloto h-100 flex-column border-team-williams" style="border-left-width: 4px;">
                <img src="{{ asset('img/carlos-sainz.jpg') }}" class="card-img-top rounded-0" alt="Carlos Sainz" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h3 class="h6 fw-bold text-f1-white mb-0">CARLOS SAINZ</h3>
                        <span class="badge bg-team-williams" style="font-size: 0.9rem;">#55</span>
                    </div>
                    <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">🇪🇸 España</p>
                    <div class="mb-3">
                        <span class="badge bg-team-williams mb-1">Williams</span>
                        <span class="badge bg-f1-gray text-f1-white">10 años en F1</span>
                    </div>
                    <a href="{{ route('perfil-piloto', 'carlos-sainz') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL COMPLETO</a>
                </div>
            </div>
        </article>

        {{-- Pierre Gasly --}}
        <article class="col-md-4">
            <div class="card card-piloto h-100 flex-column border-team-alpine" style="border-left-width: 4px;">
                <img src="{{ asset('img/pierre-gasly.jpg') }}" class="card-img-top rounded-0" alt="Pierre Gasly" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h3 class="h6 fw-bold text-f1-white mb-0">PIERRE GASLY</h3>
                        <span class="badge bg-team-alpine" style="font-size: 0.9rem;">#10</span>
                    </div>
                    <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">🇫🇷 Francia</p>
                    <div class="mb-3">
                        <span class="badge bg-team-alpine mb-1">Alpine</span>
                        <span class="badge bg-f1-gray text-f1-white">7 años en F1</span>
                    </div>
                    <a href="{{ route('perfil-piloto', 'pierre-gasly') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL COMPLETO</a>
                </div>
            </div>
        </article>

        {{-- Esteban Ocon --}}
        <article class="col-md-4">
            <div class="card card-piloto h-100 flex-column border-team-alpine" style="border-left-width: 4px;">
                <img src="{{ asset('img/esteban-ocon.jpg') }}" class="card-img-top rounded-0" alt="Esteban Ocon" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h3 class="h6 fw-bold text-f1-white mb-0">ESTEBAN OCON</h3>
                        <span class="badge bg-team-alpine" style="font-size: 0.9rem;">#31</span>
                    </div>
                    <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">🇫🇷 Francia</p>
                    <div class="mb-3">
                        <span class="badge bg-team-alpine mb-1">Alpine</span>
                        <span class="badge bg-f1-gray text-f1-white">8 años en F1</span>
                    </div>
                    <a href="{{ route('perfil-piloto', 'esteban-ocon') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL COMPLETO</a>
                </div>
            </div>
        </article>

        {{-- Fernando Alonso --}}
        <article class="col-md-4">
            <div class="card card-piloto h-100 flex-column border-team-astonmartin" style="border-left-width: 4px;">
                <img src="{{ asset('img/fernando-alonso.jpg') }}" class="card-img-top rounded-0" alt="Fernando Alonso" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h3 class="h6 fw-bold text-f1-white mb-0">FERNANDO ALONSO</h3>
                        <span class="badge bg-team-astonmartin" style="font-size: 0.9rem;">#14</span>
                    </div>
                    <p class="text-f1-gray mb-2" style="font-size: 0.8rem;">🇪🇸 España</p>
                    <div class="mb-3">
                        <span class="badge bg-team-astonmartin mb-1">Aston Martin</span>
                        <span class="badge bg-f1-gray text-f1-white">22 años en F1</span>
                    </div>
                    <a href="{{ route('perfil-piloto', 'fernando-alonso') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL COMPLETO</a>
                </div>
            </div>
        </article>

    </section>
@endsection