@extends('layouts.app')

@section('contenido')
    <div class="d-flex flex-column mb-5">
        <h1 class="fw-bold mb-4">SIGUIENTE CARRERA</h1>
        <input type="text" class="form-control w-75 rounded-0 p-3 bg-white text-dark" placeholder="Search by seed name, location and more   Q">
    </div>

    <section class="row g-4">
        
        <article class="col-md-4">
            <div class="card h-100 p-3 border-0 rounded-0">
                <div class="card-img-placeholder mb-3 p-0 overflow-hidden" style="height: 200px; background-color: #000;">
                    <img src="{{ asset('img/gp-australia.jpg') }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="GP de Australia">
                </div>
                <h3 class="h6 fw-bold mt-2">HISTORIA DEL GP</h3>
                <p style="font-size: 0.8rem;">INFORMACION INTERESANTE ACERCA DEL GP</p>
                <a href="{{ route('calendario') }}" class="btn btn-primary mt-auto py-1 px-4 align-self-start text-decoration-none" style="font-size: 0.8rem;">SHOW ALL</a>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card h-100 p-3 border-0 rounded-0">
                <div class="card-img-placeholder mb-3 p-0 overflow-hidden" style="height: 200px; background-color: #000;">
                    <img src="{{ asset('img/max-verstappen.png') }}" class="img-fluid w-100 h-100" style="object-fit: cover; object-position: top;" alt="Max Verstappen">
                </div>
                <h3 class="h6 fw-bold mt-2">HISTORIA DE PILOTO</h3>
                <p style="font-size: 0.8rem;">INFORMACION ACERCA DE NUESTROS CORREDORES</p>
                <a href="{{ route('pilotos') }}" class="btn btn-primary mt-auto py-1 px-4 align-self-start text-decoration-none" style="font-size: 0.8rem;">SHOW ALL</a>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card h-100 p-3 border-0 rounded-0">
                <div class="card-img-placeholder mb-3 p-0 overflow-hidden" style="height: 200px; background-color: #000;">
                    <img src="{{ asset('img/tabla-posiciones.png') }}" class="img-fluid w-100 h-100" style="object-fit: cover; object-position: top;" alt="Tabla de Posiciones">
                </div>
                <h3 class="h6 fw-bold mt-2">CLASIFICACION</h3>
                <p style="font-size: 0.8rem;">INFORMACION ACERCA DE LAS POSICIONES DE NUESTROS CORREDORES</p>
                <a href="{{ route('clasificacion') }}" class="btn btn-primary mt-auto py-1 px-4 align-self-start text-decoration-none" style="font-size: 0.8rem;">SHOW ALL</a>
            </div>
        </article>
        
    </section>
@endsection