@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-white">ESCUDERIAS</h1>

    <section class="row g-4">
        
        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/logo-mercedes.jpg') }}" class="card-img-top" alt="Mercedes" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">MERCEDES</h3>
                    <p class="mb-0" style="font-size: 0.75rem; text-align: justify;">El equipo Mercedes-AMG PETRONAS F1 es una escudería anglo-alemana líder en Fórmula 1, con sede en Brackley y Brixworth (RU), famosa por su dominio histórico entre 2014-2021, logrando ocho campeonatos de constructores consecutivos.</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/logo-ferrari.jpg') }}" class="card-img-top" alt="Ferrari" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">FERRARI</h3>
                    <p class="mb-0" style="font-size: 0.75rem; text-align: justify;">La Scuderia Ferrari es el equipo más antiguo, exitoso y laureado en la historia de la Fórmula 1, presente desde 1950.</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/logo-aston-martin.jpg') }}" class="card-img-top" alt="Aston Martin" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">ASTON MARTIN</h3>
                    <p class="mb-0" style="font-size: 0.75rem; text-align: justify;">Aston Martin Aramco Formula One Team es una escudería británica que regresó oficialmente a la F1 en 2021, con sede en Silverstone.</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/logo-red-bull.jpg') }}" class="card-img-top" alt="Red Bull" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">RED BULL</h3>
                    <p class="mb-0" style="font-size: 0.75rem; text-align: justify;">Oracle Red Bull Racing es una escudería de Fórmula 1 de élite, propiedad de la marca de bebidas energéticas, con sede en Milton Keynes, Reino Unido, y licencia austriaca.</p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/logo-alpine.jpg') }}" class="card-img-top" alt="Alpine" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">ALPINE</h3>
                    <p class="mb-0" style="font-size: 0.75rem; text-align: justify;">El BWT Alpine F1 Team es el equipo oficial de la marca francesa Alpine (parte del Grupo Renault) que compite en la Fórmula 1 desde 2021, sustituyendo al anterior Renault F1 Team. </p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/logo-mclaren.jpg') }}" class="card-img-top" alt="McLaren" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4">
                    <h3 class="h6 fw-bold text-white mb-1">MCLAREN</h3>
                    <p class="mb-0" style="font-size: 0.75rem; text-align: justify;">El McLaren F1 (1992-1998) es un superdeportivo icónico diseñado por Gordon Murray, famoso por su configuración única de tres asientos con el conductor en el centro.</p>
                </div>
            </div>
        </article>

    </section>
@endsection