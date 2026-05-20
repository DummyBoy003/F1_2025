@extends('layouts.app')

@section('contenido')
    <div class="container my-5">
        <h1 class="fw-bold text-white mb-4 text-center" style="letter-spacing: 1px;">DIRECTORIO F1 2025</h1>
        <p class="text-center text-muted mb-5">Busca por texto o utiliza los filtros avanzados por subcategorías.</p>

        <div class="d-flex justify-content-center mb-5">
            <input type="text" id="buscador-global" class="form-control w-75 rounded-0 p-3 bg-white text-dark fw-bold" placeholder="Escribe aquí para buscar (ej. Ferrari, Australia, Max...) 🔍">
        </div>

        <div class="row">
            <aside class="col-md-3 mb-4">
                <div class="bg-dark p-4 rounded h-100">
                    <h4 class="text-white fw-bold mb-3 h5">FILTROS AVANZADOS</h4>
                    
                    <div class="form-check mb-4 border-bottom border-secondary pb-3">
                        <input class="form-check-input" type="checkbox" id="chk-todos" checked>
                        <label class="form-check-label text-white fw-bold" for="chk-todos">VER TODOS</label>
                    </div>

                    <h5 class="text-danger fw-bold h6 mt-3">TIPO</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chk-carreras">
                        <label class="form-check-label text-light" for="chk-carreras">Carreras</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chk-pilotos">
                        <label class="form-check-label text-light" for="chk-pilotos">Pilotos</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="chk-escuderias">
                        <label class="form-check-label text-light" for="chk-escuderias">Escuderías</label>
                    </div>

                    <h5 class="text-danger fw-bold h6 mt-3">ZONA</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chk-europa">
                        <label class="form-check-label text-light" for="chk-europa">Europa</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chk-america">
                        <label class="form-check-label text-light" for="chk-america">América</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="chk-asia">
                        <label class="form-check-label text-light" for="chk-asia">Asia / Oceanía</label>
                    </div>

                    <h5 class="text-danger fw-bold h6 mt-3">ESTADO</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chk-activo">
                        <label class="form-check-label text-light" for="chk-activo">Activo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chk-historico">
                        <label class="form-check-label text-light" for="chk-historico">Histórico</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chk-rumor">
                        <label class="form-check-label text-light" for="chk-rumor">Rumor</label>
                    </div>
                </div>
            </aside>

            <main class="col-md-9">
                <div class="row g-4">
                    
                    <article class="col-md-6 item-directorio tipo-carreras zona-asia estado-activo prod-australia">
                        <div class="card bg-black text-white border-secondary h-100 p-3">
                            <span class="badge bg-danger mb-2" style="width: fit-content;">CARRERA</span>
                            <h3 class="h5 fw-bold text-white text-uppercase">GP de Australia</h3>
                            <p class="text-muted" style="font-size: 0.85rem;">Albert Park, Melbourne. Carrera activa en Oceanía.</p>
                        </div>
                    </article>

                    <article class="col-md-6 item-directorio tipo-carreras zona-america estado-activo prod-mexico">
                        <div class="card bg-black text-white border-secondary h-100 p-3">
                            <span class="badge bg-danger mb-2" style="width: fit-content;">CARRERA</span>
                            <h3 class="h5 fw-bold text-white text-uppercase">GP de México</h3>
                            <p class="text-muted" style="font-size: 0.85rem;">Autódromo Hermanos Rodríguez. Carrera activa en América.</p>
                        </div>
                    </article>

                    <article class="col-md-6 item-directorio tipo-pilotos zona-europa estado-activo prod-max prod-verstappen">
                        <div class="card bg-black text-white border-secondary h-100 p-3">
                            <span class="badge bg-primary mb-2" style="width: fit-content;">PILOTO</span>
                            <h3 class="h5 fw-bold text-white text-uppercase">Max Verstappen</h3>
                            <p class="text-muted" style="font-size: 0.85rem;">Piloto activo de Red Bull Racing, originario de Europa.</p>
                        </div>
                    </article>

                    <article class="col-md-6 item-directorio tipo-pilotos zona-america estado-historico prod-ayrton prod-senna">
                        <div class="card bg-black text-white border-secondary h-100 p-3">
                            <span class="badge bg-primary mb-2" style="width: fit-content;">PILOTO</span>
                            <h3 class="h5 fw-bold text-white text-uppercase">Ayrton Senna</h3>
                            <p class="text-muted" style="font-size: 0.85rem;">Leyenda histórica de la Fórmula 1, originario de Brasil (América).</p>
                        </div>
                    </article>

                    <article class="col-md-6 item-directorio tipo-escuderias zona-europa estado-activo prod-ferrari">
                        <div class="card bg-black text-white border-secondary h-100 p-3">
                            <span class="badge bg-warning text-dark mb-2" style="width: fit-content;">ESCUDERÍA</span>
                            <h3 class="h5 fw-bold text-white text-uppercase">Scuderia Ferrari</h3>
                            <p class="text-muted" style="font-size: 0.85rem;">Equipo activo y legendario con sede en Italia (Europa).</p>
                        </div>
                    </article>

                    <article class="col-md-6 item-directorio tipo-escuderias zona-america estado-rumor prod-andretti">
                        <div class="card bg-black text-white border-secondary h-100 p-3">
                            <span class="badge bg-warning text-dark mb-2" style="width: fit-content;">ESCUDERÍA</span>
                            <h3 class="h5 fw-bold text-white text-uppercase">Andretti F1</h3>
                            <p class="text-muted" style="font-size: 0.85rem;">Fuerte rumor de una nueva escudería proveniente de Estados Unidos (América).</p>
                        </div>
                    </article>

                </div>
            </main>
        </div>
    </div>

    <script src="{{ secure_asset('js/filtros.js') }}"></script>
@endsection