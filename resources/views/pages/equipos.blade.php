@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-f1-white">ESCUDERÍAS TEMPORADA 2025</h1>

    <section class="row g-4">
        
        {{-- Red Bull Racing --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-redbull" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-red-bull.jpg') }}" class="card-img-top" alt="Red Bull Racing" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">RED BULL RACING</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        Oracle Red Bull Racing es la escudería dominante de la era moderna, con sede en Milton Keynes, Reino Unido. Campeones del mundo en 2021-2023.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-redbull me-1 mb-1">#1 Max Verstappen</span>
                        <span class="badge bg-team-redbull mb-1">#11 Sergio Pérez</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">6</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">2005</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- Ferrari --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-ferrari" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-ferrari.jpg') }}" class="card-img-top" alt="Ferrari" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">FERRARI</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        La Scuderia Ferrari es el equipo más antiguo y exitoso de la F1, presente desde 1950. El icono italiano de Maranello busca recuperar su gloria.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-ferrari me-1 mb-1">#44 Lewis Hamilton</span>
                        <span class="badge bg-team-ferrari mb-1">#16 Charles Leclerc</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">16</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">1950</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- Mercedes --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-mercedes" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-mercedes.jpg') }}" class="card-img-top" alt="Mercedes" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">MERCEDES-AMG</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        Mercedes-AMG Petronas es una escudería anglo-alemana que dominó la era híbrida (2014-2021) con 8 campeonatos consecutivos de constructores.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-mercedes me-1 mb-1">#63 George Russell</span>
                        <span class="badge bg-team-mercedes mb-1">#12 Kimi Antonelli</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">8</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">2010</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- McLaren --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-mclaren" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-mclaren.jpg') }}" class="card-img-top" alt="McLaren" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">MCLAREN</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        McLaren F1 Team es una escudería británica histórica con sede en Woking. Segundo equipo más exitoso de la historia con 8 campeonatos de constructores.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-mclaren me-1 mb-1">#4 Lando Norris</span>
                        <span class="badge bg-team-mclaren mb-1">#81 Oscar Piastri</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">8</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">1966</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- Aston Martin --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-astonmartin" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-aston-martin.jpg') }}" class="card-img-top" alt="Aston Martin" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">ASTON MARTIN</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        Aston Martin Aramco es una escudería británica con sede en Silverstone. Regresó oficialmente a la F1 en 2021 con grandes ambiciones de título.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-astonmartin me-1 mb-1">#14 Fernando Alonso</span>
                        <span class="badge bg-team-astonmartin mb-1">#18 Lance Stroll</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">0</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">2021</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- Alpine --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-alpine" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-alpine.jpg') }}" class="card-img-top" alt="Alpine" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">ALPINE</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        BWT Alpine F1 Team es el equipo oficial de Alpine (Grupo Renault) desde 2021. Heredero del legendario equipo Renault F1 bicampeón en 2005-2006.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-alpine me-1 mb-1">#10 Pierre Gasly</span>
                        <span class="badge bg-team-alpine mb-1">#31 Esteban Ocon</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">2</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">2021</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- Williams --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-williams" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-williams.jpg') }}" class="card-img-top" alt="Williams" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">WILLIAMS RACING</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        Williams Racing es una escudería británica legendaria con sede en Grove. Tercer equipo más exitoso de la historia con 9 campeonatos de constructores.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-williams me-1 mb-1">#55 Carlos Sainz</span>
                        <span class="badge bg-team-williams mb-1">#2 Alex Albon</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">9</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">1977</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- Haas --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-haas" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-haas.jpg') }}" class="card-img-top" alt="Haas" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">HAAS F1 TEAM</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        MoneyGram Haas F1 Team es la única escudería estadounidense en la parrilla, con sede en Kannapolis, Carolina del Norte. Debutó en 2016.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-haas text-dark me-1 mb-1">#27 Nico Hülkenberg</span>
                        <span class="badge bg-team-haas text-dark mb-1">#20 Kevin Magnussen</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">0</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">2016</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- Sauber/Stake --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-sauber" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-stake.jpg') }}" class="card-img-top" alt="Sauber" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">STAKE F1 TEAM</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        Stake F1 Team (anteriormente Alfa Romeo/Sauber) es una escudería suiza con sede en Hinwil. Se convertirá en Audi F1 a partir de 2026.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-sauber me-1 mb-1">#77 Valtteri Bottas</span>
                        <span class="badge bg-team-sauber mb-1">#24 Zhou Guanyu</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">0</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">1993</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- RB (AlphaTauri) --}}
        <article class="col-md-4">
            <div class="card h-100 border-team-rb" style="border-top-width: 5px;">
                <img src="{{ asset('img/logo-rb.jpg') }}" class="card-img-top" alt="RB" style="object-fit: cover; height: 220px;">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="h5 fw-bold text-f1-white mb-2">RB F1 TEAM</h3>
                    <p class="text-f1-gray mb-3" style="font-size: 0.85rem; line-height: 1.6;">
                        RB F1 Team (anteriormente AlphaTauri/Toro Rosso) es el equipo hermano de Red Bull Racing, con sede en Faenza, Italia. Cantera de jóvenes talentos.
                    </p>
                    
                    {{-- Pilotos --}}
                    <div class="mb-3">
                        <h4 class="h6 text-f1-white mb-2">👥 Pilotos 2025:</h4>
                        <span class="badge bg-team-rb me-1 mb-1">#22 Yuki Tsunoda</span>
                        <span class="badge bg-team-rb mb-1">#21 Liam Lawson</span>
                    </div>

                    {{-- Información adicional --}}
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-f1-gray mb-2" style="font-size: 0.8rem;">
                            <span>🏆 Campeonatos:</span>
                            <strong class="text-f1-white">0</strong>
                        </div>
                        <div class="d-flex justify-content-between text-f1-gray" style="font-size: 0.8rem;">
                            <span>📅 Fundación:</span>
                            <strong class="text-f1-white">2006</strong>
                        </div>
                    </div>
                </div>
            </div>
        </article>

    </section>
@endsection
