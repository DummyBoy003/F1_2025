@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-white" style="text-transform: uppercase;">
        CAPTURAS DE LOS MEJORES<br>MOMENTOS DE LA TEMPORADA 2025
    </h1>

    <section class="row g-4 mb-5">
        
        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/galeria-1.jpg') }}" class="card-img-top rounded-0" alt="GP de Australia 2025" style="object-fit: cover; height: 220px; background-color: #111;">
                <div class="card-body p-4 text-start">
                    <h3 class="h6 fw-bold text-white mb-2 text-uppercase">NORRIS REINA EN LA LLUVIA DE AUSTRALIA</h3>
                    <p class="text-muted mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                        Lando Norris se llevó la victoria en un dramático y caótico inicio de temporada en Albert Park bajo la lluvia, superando a Max Verstappen.
                    </p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/galeria-2.jpg') }}" class="card-img-top rounded-0" alt="GP de China 2025" style="object-fit: cover; height: 220px; background-color: #111;">
                <div class="card-body p-4 text-start">
                    <h3 class="h6 fw-bold text-white mb-2 text-uppercase">PIASTRI DOMINA EN SHANGHÁI</h3>
                    <p class="text-muted mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                        Impresionante victoria de Oscar Piastri en el Gran Premio de China, liderando un magistral doblete (1-2) para la escudería McLaren.
                    </p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/galeria-3.jpg') }}" class="card-img-top rounded-0" alt="GP de Japón 2025" style="object-fit: cover; height: 220px; background-color: #111;">
                <div class="card-body p-4 text-start">
                    <h3 class="h6 fw-bold text-white mb-2 text-uppercase">VERSTAPPEN IMPLACABLE EN SUZUKA</h3>
                    <p class="text-muted mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                        Max Verstappen responde a la enorme presión de sus rivales directos con una victoria dominante e impecable en el legendario circuito de Japón.
                    </p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/galeria-4.jpg') }}" class="card-img-top rounded-0" alt="Hamilton Ferrari 2025" style="object-fit: cover; height: 220px; background-color: #111;">
                <div class="card-body p-4 text-start">
                    <h3 class="h6 fw-bold text-white mb-2 text-uppercase">LA NUEVA ERA DE HAMILTON DE ROJO</h3>
                    <p class="text-muted mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                        El histórico y mediático debut del heptacampeón Lewis Hamilton vistiendo los colores de la Scuderia Ferrari junto a Charles Leclerc.
                    </p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/galeria-5.jpg') }}" class="card-img-top rounded-0" alt="Carlos Sainz Williams" style="object-fit: cover; height: 220px; background-color: #111;">
                <div class="card-body p-4 text-start">
                    <h3 class="h6 fw-bold text-white mb-2 text-uppercase">SAINZ BRILLA CON WILLIAMS</h3>
                    <p class="text-muted mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                        El piloto español inicia una nueva etapa demostrando su talento innegable y sumando puntos vitales para la histórica escudería británica.
                    </p>
                </div>
            </div>
        </article>

        <article class="col-md-4">
            <div class="card bg-black border-0 rounded-0 h-100">
                <img src="{{ asset('img/galeria-6.jpg') }}" class="card-img-top rounded-0" alt="Kimi Antonelli Mercedes" style="object-fit: cover; height: 220px; background-color: #111;">
                <div class="card-body p-4 text-start">
                    <h3 class="h6 fw-bold text-white mb-2 text-uppercase">EL GRAN DEBUT DE KIMI ANTONELLI</h3>
                    <p class="text-muted mb-0" style="font-size: 0.8rem; line-height: 1.5;">
                        El talentoso novato italiano hace su presentación oficial en la máxima categoría como el nuevo piloto titular de Mercedes-AMG.
                    </p>
                </div>
            </div>
        </article>

    </section>
@endsection