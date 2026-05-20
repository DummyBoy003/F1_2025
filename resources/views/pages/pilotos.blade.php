@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center" style="color: #ffffff;">PILOTOS DEL 2025</h1>

    <p class="text-muted mb-2 fw-bold" style="font-size: 0.7rem; letter-spacing: 1px;">FOTO DEL PILOTO</p>

    <section class="row g-4">
        
        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100 flex-column">
                <img src="{{ asset('img/lance-stroll.jpg') }}" class="card-img-top rounded-0" alt="Lance Stroll" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h6 fw-bold text-white mb-1">LANCE STROLL</h3>
                    <p class="text-muted mb-3" style="font-size: 0.7rem;"></p>
                    <a href="{{ route('perfil-piloto', 'lance-stroll') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL</a>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100 flex-column">
                <img src="{{ asset('img/lewis-hamilton.jpg') }}" class="card-img-top rounded-0" alt="Lewis Hamilton" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h6 fw-bold text-white mb-1">LEWIS HAMILTON</h3>
                    <p class="text-muted mb-3" style="font-size: 0.7rem;"></p>
                    <a href="{{ route('perfil-piloto', 'lewis-hamilton') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL</a>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100 flex-column">
                <img src="{{ asset('img/carlos-sainz.jpg') }}" class="card-img-top rounded-0" alt="Carlos Sainz" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h6 fw-bold text-white mb-1">CARLOS SAINZ</h3>
                    <p class="text-muted mb-3" style="font-size: 0.7rem;"></p>
                    <a href="{{ route('perfil-piloto', 'carlos-sainz') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL</a>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100 flex-column">
                <img src="{{ asset('img/pierre-gasly.jpg') }}" class="card-img-top rounded-0" alt="Pierre Gasly" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h6 fw-bold text-white mb-1">PIERRE GASLY</h3>
                    <p class="text-muted mb-3" style="font-size: 0.7rem;"></p>
                    <a href="{{ route('perfil-piloto', 'pierre-gasly') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL</a>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100 flex-column">
                <img src="{{ asset('img/esteban-ocon.jpg') }}" class="card-img-top rounded-0" alt="Esteban Ocon" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h6 fw-bold text-white mb-1">ESTEBAN OCON</h3>
                    <p class="text-muted mb-3" style="font-size: 0.7rem;"></p>
                    <a href="{{ route('perfil-piloto', 'esteban-ocon') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL</a>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100 flex-column">
                <img src="{{ asset('img/fernando-alonso.jpg') }}" class="card-img-top rounded-0" alt="Fernando Alonso" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h6 fw-bold text-white mb-1">FERNANDO ALONSO</h3>
                    <p class="text-muted mb-3" style="font-size: 0.7rem;"></p>
                    <a href="{{ route('perfil-piloto', 'fernando-alonso') }}" class="btn btn-primary mt-auto py-2 text-decoration-none" style="font-size: 0.75rem; font-weight: bold;">VER PERFIL</a>
                </div>
            </div>
        </article>

    </section>
@endsection