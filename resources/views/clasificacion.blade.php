@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-white">CLASIFICACION DEL GP</h1>

    <p class="text-muted mb-2 fw-bold" style="font-size: 0.7rem; letter-spacing: 1px;">FOTO DEL PILOTO</p>

    <section class="row g-4">
        
        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/lance-stroll.jpg') }}" class="card-img-top rounded-0" alt="Lance Stroll" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">LANCE STROLL</h3>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">ARRANCA P1</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/lewis-hamilton.jpg') }}" class="card-img-top rounded-0" alt="Lewis Hamilton" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">LEWIS HAMILTON</h3>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">ARRANCA P2</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/carlos-sainz.jpg') }}" class="card-img-top rounded-0" alt="Carlos Sainz" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">CARLOS SAINZ</h3>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">ARRANCA P3</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/pierre-gasly.jpg') }}" class="card-img-top rounded-0" alt="Pierre Gasly" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">PIERRE GASLY</h3>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">ARRANCA P4</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/esteban-ocon.jpg') }}" class="card-img-top rounded-0" alt="Esteban Ocon" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">ESTEBAN OCON</h3>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">ARRANCA P5</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/fernando-alonso.jpg') }}" class="card-img-top rounded-0" alt="Fernando Alonso" style="object-fit: cover; height: 250px; object-position: top;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">FERNANDO ALONSO</h3>
                    <p class="text-muted mb-0" style="font-size: 0.7rem;">ARRANCA P6</p>
                </div>
            </div>
        </article>

    </section>
@endsection